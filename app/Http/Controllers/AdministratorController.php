<?php

namespace App\Http\Controllers;

use App\Models\Procurement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdministratorController extends Controller
{
    public function index()
    {
        $procurements = Procurement::all();
        return view("administrator.index", compact("procurements"));
    }

    public function create()
    {
        $action = route("administrator.store");
        return view("administrator.form", compact("action"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|unique:procurements|max:100",
            "thumbnail" => "required|mimes:jpg,jpeg,png",
            "desc" => "required|string",
        ]);
        $slug = Str::slug($request->title, "-");
        $filename = $slug . "." . $request->thumbnail->extension();
        $request->thumbnail->move(public_path("assets/img/thumbnail"), $filename);
        Procurement::create([
            "title" => $request->title,
            "slug" => $slug,
            "thumbnail" => $filename,
            "desc" => $request->desc
        ]);
        return to_route("administrator.index");
    }

    // public function file(Request $request)
    // {
    //     try {
    //         $fileRoute = "public/assets/doc/attachment";
    //         $fieldname = "desc";
    //         $filename = explode(".", $_FILES[$fieldname]["name"]);
    //         $finfo = finfo_open(FILEINFO_MIME_TYPE);
    //         $tmpName = $_FILES[$fieldname]["tmp_name"];
    //         $mimeType = finfo_file($finfo, $tmpName);
    //         $extension = end($filename);
    //         $allowedExts = array("txt", "pdf", "doc", "html", "jpg", "jpeg", "png");
    //         $allowedMimeTypes = array("text/plain", "application/msword", "application/x-pdf", "application/pdf", "text/html", "image/jpeg", "image/png");
    //         if (!in_array(strtolower($mimeType), $allowedMimeTypes) || !in_array(strtolower($extension), $allowedExts)) {
    //             throw new \Exception("File does not meet the validation.");
    //         }
    //         $name = sha1(microtime()) . "." . $extension;
    //         $fullNamePath = dirname(__FILE__) . $fileRoute . $name;
    //         if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") {
    //             $protocol = "https://";
    //         } else {
    //             $protocol = "http://";
    //         }
    //         move_uploaded_file($tmpName, $fullNamePath);
    //         $response = new \StdClass;
    //         $response->link = $protocol . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . $fileRoute . $name;
    //         echo stripslashes(json_encode($response));
    //     } catch (Exception $e) {
    //         echo $e->getMessage();
    //         http_response_code(404);
    //     }
    // }

    public function edit($id)
    {
        $action = route("administrator.update", $id);
        $procurement = Procurement::find($id);
        return view("administrator.form", compact("action", "procurement"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "desc" => "required|string",
        ]);
        $procurement = Procurement::find($id);
        $procurement->update([
            "desc" => $request->desc
        ]);
        return to_route("administrator.index");
    }

    public function destroy($id)
    {
        $procurement = Procurement::find($id);
        $procurement->delete();
        return to_route("administrator.index");
    }
}
