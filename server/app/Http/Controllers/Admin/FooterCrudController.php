<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FooterRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FooterCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FooterCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Footer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/footer');
        CRUD::setEntityNameStrings('', 'Футер');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'icon',
            'label' => 'Иконка'
        ]);
        CRUD::addColumn([
            'name' => 'copyright',
            'label' => 'Авторское право'
        ]);
        CRUD::addColumn([
            'name' => 'store_link_title',
            'label' => 'Заголовок ссылок на маркетплайсы'
        ]);
        CRUD::addColumn([
            'name' => 'personal_data',
            'label' => 'Персональные данные'
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::addField([
            'name'      => 'icon',
            'label'     => 'Icon',
            'type'      => 'upload',
            'upload'    => true,
            //'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
//            // optional:
//            'temporary' => 10
        ]);
        CRUD::addField([
            'name' => 'copyright',
            'label' => 'Авторское право'
        ]);
        CRUD::addField([
            'name' => 'store_link_title',
            'label' => 'Заголовок ссылок на маркетплайсы'
        ]);
        CRUD::addField([
            'name' => 'personal_data',
            'label' => 'Персональные данные'
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
