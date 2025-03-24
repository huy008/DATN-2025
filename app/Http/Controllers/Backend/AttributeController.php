<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Repositories\AttributeRepository;
use App\Services\AttributeService;

class AttributeController extends Controller
{
    protected $attributeService;
    protected $attributeRepository;
    protected $languageRepository;
    protected $language;

    public function __construct(
        AttributeService $attributeService,
        AttributeRepository $attributeRepository,
    ){
        $this->attributeService = $attributeService;
        $this->attributeRepository = $attributeRepository;
    }

    public function index(Request $request){
        $attributes = $this->attributeService->paginate($request);
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'model' => 'Attribute'
        ];
        $config['seo'] = __('messages.attribute');
        $template = 'backend.attribute.attribute.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'attributes'
        ));
    }

    public function create(){
        $config['seo'] = __('messages.attribute');
        $config['method'] = 'create';
        $template = 'backend.attribute.attribute.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
        ));
    }

    public function store(StoreAttributeRequest $request){

        if($this->attributeService->create($request)){
            return redirect()->route('attribute.index')->with('success','Thêm mới bản ghi thành công');
        }
        return redirect()->route('attribute.index')->with('error','Thêm mới bản ghi không thành công. Hãy thử lại');
    }

    public function edit($id){
        $attribute = $this->attributeRepository->getAttributeById($id);
        $config['seo'] = __('messages.attribute');
        $config['method'] = 'edit';
        $template = 'backend.attribute.attribute.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'attribute',
        ));
    }

    public function update($id, UpdateAttributeRequest $request){
        if($this->attributeService->update($id, $request)){
            return redirect()->route('attribute.index')->with('success','Cập nhật bản ghi thành công');
        }
        return redirect()->route('attribute.index')->with('error','Cập nhật bản ghi không thành công. Hãy thử lại');
    }

    public function delete($id){
        $config['seo'] = __('messages.attribute');
        $attribute = $this->attributeRepository->getAttributeById($id);
        $template = 'backend.attribute.attribute.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'attribute',
            'config',
        ));
    }

    public function destroy($id){
        if($this->attributeService->destroy($id)){
            return redirect()->route('attribute.index')->with('success','Xóa bản ghi thành công');
        }
        return redirect()->route('attribute.index')->with('error','Xóa bản ghi không thành công. Hãy thử lại');
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
