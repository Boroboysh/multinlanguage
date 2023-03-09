<?php

namespace App\Http\Controllers;

use App\Http\Resources\ContactForm\ContactFormResource;
use App\Http\Resources\FooterResource;
use App\Http\Resources\Header\HeaderResource;
use App\Http\Resources\ListBlock\ListBlockResource;
use App\Http\Resources\MapInfoBlock\MapInfoBlockResource;
use App\Http\Resources\Subheader\SubheaderResource;
use App\Http\Resources\TextInfoBlock\TextInfoBlockResource;
use App\Models\ContactForm;
use App\Models\Footer;
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
        $defaultId = 1;

        if ($languageCode && in_array($languageCode, $acceptedLanguages)) {
            App::setLocale($languageCode);

            return [
                "header" => new HeaderResource(Header::where('id', $defaultId)->first()),
                "body" => [
                    "subheader" => new SubheaderResource(Subheader::where('id', $defaultId)->first()),
                    "textInfoBlock" => new TextInfoBlockResource(TextInfoBlock::where('id', $defaultId)->first()),
                    "mapInfoBlock" => new MapInfoBlockResource(MapInfoBlock::where('id', 3)->first()),
                    "listInfoBlock" => new ListBlockResource(ListInfoBlock::where('id', $defaultId)->first()),
                    "contactForm" => new ContactFormResource(ContactForm::where('id', $defaultId)->first())
                ],
                "footer" => new FooterResource(Footer::first())
            ];
        } else {
            return response('Invalid language code', 404);
        }

    }
}
