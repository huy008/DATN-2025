<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreAttributeCatalogueRequest;
use App\Http\Requests\UpdateAttributeCatalogueRequest;
use App\Http\Requests\DeleteAttributeCatalogueRequest;
use App\Repositories\AttributeRepository;
use App\Repositories\AttributeValueRepository;
use App\Services\AttributeValueService;
class AttributeValueController extends Controller
{

    protected $attributeCatalogueService;
    protected $attributeCatalogueRepository;
    protected $attributeRepository;

    public function __construct(
        AttributeValueService $attributeCatalogueService,
        AttributeValueRepository $attributeCatalogueRepository,
        AttributeRepository $attributeRepository
    ){
        $this->attributeCatalogueService = $attributeCatalogueService;
        $this->attributeCatalogueRepository = $attributeCatalogueRepository;
        $this->attributeRepository = $attributeRepository;
    }
 
    public function index(Request $request){
        $attributeCatalogues = $this->attributeCatalogueService->paginate($request);
        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'model' => 'AttributeValue',
        ];
        $config['seo'] = __('messages.attributeCatalogue');
        $template = 'backend.attribute.value.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'attributeCatalogues'
        ));
    }

    public function create(){
        $attributes = $this->attributeRepository->all();
        $config['seo'] = __('messages.attributeCatalogue');
        $config['method'] = 'create';
        $template = 'backend.attribute.value.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'attributes'
        ));
    }

    public function store(StoreAttributeCatalogueRequest $request){
        if($this->attributeCatalogueService->create($request)){
            return redirect()->route('attribute.value.index')->with('success','Thêm mới bản ghi thành công');
        }
        return redirect()->route('attribute.value.index')->with('error','Thêm mới bản ghi không thành công. Hãy thử lại');
    }

    public function edit($id){
        // $this->authorize('modules', 'attribute.catalogue.update');
        $attributeCatalogue = $this->attributeCatalogueRepository->getAttributeCatalogueById($id, $this->language);
        $config = $this->configData();
        $config['seo'] = __('messages.attributeCatalogue');
        $config['method'] = 'edit';
        $dropdown  = $this->nestedset->Dropdown();
        $template = 'backend.attribute.catalogue.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'dropdown',
            'attributeCatalogue',
        ));
    }

    public function update($id, UpdateAttributeCatalogueRequest $request){
        if($this->attributeCatalogueService->update($id, $request, $this->language)){
            return redirect()->route('attribute.catalogue.index')->with('success','Cập nhật bản ghi thành công');
        }
        return redirect()->route('attribute.catalogue.index')->with('error','Cập nhật bản ghi không thành công. Hãy thử lại');
    }

    public function delete($id){
        // $this->authorize('modules', 'attribute.catalogue.destroy');
        $config['seo'] = __('messages.attributeCatalogue');
        $attributeCatalogue = $this->attributeCatalogueRepository->getAttributeCatalogueById($id, $this->language);
        $template = 'backend.attribute.catalogue.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'attributeCatalogue',
            'config',
        ));
    }

    public function destroy(DeleteAttributeCatalogueRequest $request, $id){
        if($this->attributeCatalogueService->destroy($id, $this->language)){
            return redirect()->route('attribute.catalogue.index')->with('success','Xóa bản ghi thành công');
        }
        return redirect()->route('attribute.catalogue.index')->with('error','Xóa bản ghi không thành công. Hãy thử lại');
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
    public function getAttribute(Request $request)
    {

        $payload = $request->input();
        $attributes = $this->attributeCatalogueRepository->searchAttributes($payload['search'], $payload['option']);
        $attributeMapped = $attributes->map(function ($attribute) {
            return [
                'id' => $attribute->id,
                'text' => $attribute->value,
            ];
        })->all();
        return response()->json(array('items' => $attributeMapped));
    }
}
