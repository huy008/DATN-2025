<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ReviewRepository;
use App\Services\ReviewService;

class ReviewAdminController extends Controller
{
    protected $reviewService;
    protected $reviewRepository;
    protected $languageRepository;
    protected $language;

    public function __construct(
        ReviewService $reviewService,
        ReviewRepository $reviewRepository,
    ){

        $this->reviewService = $reviewService;
        $this->reviewRepository = $reviewRepository;
    }
    public function index(Request $request){
        $reviews = $this->reviewService->paginate($request, $this->language);
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'model' => 'review'
        ];
        $config['seo'] = __('messages.review');
        $template = 'backend.review.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'reviews'
        ));
    }

    public function destroy($id){
        if($this->reviewService->destroy($id)){
            return redirect()->route('review.index')->with('success','Xóa bản ghi thành công');
        }
        return redirect()->route('review.index')->with('error','Xóa bản ghi không thành công. Hãy thử lại');
    }

    private function configData(){
        return [
            'js' => [
                'backend/plugins/ckeditor/ckeditor.js',
                'backend/plugins/ckfinder_2/ckfinder.js',
                'backend/library/finder.js',
                'backend/library/seo.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ]
          
        ];
    }
}
