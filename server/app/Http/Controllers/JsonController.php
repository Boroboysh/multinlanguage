<?php

namespace App\Http\Controllers;

use App\Http\Resources\Header\HeaderResource;
use App\Http\Resources\ListBlock\ListBlockResource;
use App\Http\Resources\MapInfoBlock\MapInfoBlockResource;
use App\Http\Resources\Subheader\SubheaderResource;
use App\Http\Resources\TextInfoBlock\TextInfoBlockResource;
use App\Models\Header;
use App\Models\ListInfoBlock;
use App\Models\MapInfoBlock;
use App\Models\Subheader;
use App\Models\TextInfoBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class JsonController extends Controller
{
    public function getData(Request $request)
    {
        $acceptedLanguages = ['ru', 'en', 'kk'];
        $languageCode = $request->header('locale');

        if ($languageCode && in_array($languageCode, $acceptedLanguages)) {
            App::setLocale($languageCode);

            return [
                "header" => HeaderResource::collection(Header::where('id', 1)->get()),
                "body" => [
                    "subheader" => SubheaderResource::collection(Subheader::where('id', 1)->get()),
                    "textInfoBlock" => TextInfoBlockResource::collection(TextInfoBlock::where('id', 1)->get()),
                    "mapInfoBlock" => MapInfoBlockResource::collection(MapInfoBlock::where('id', 1)->get()),
                    "listInfoBlock" => ListBlockResource::collection(ListInfoBlock::where('id', 1)->get())
                ],
//            "footer" => []
            ];
        } else {
            return response('Invalid language code', 400);
        }

    }
}
