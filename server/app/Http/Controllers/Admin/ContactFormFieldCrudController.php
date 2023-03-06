<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactFormFieldRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContactFormFieldCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContactFormFieldCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ContactFormField::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contact-form-field');
        CRUD::setEntityNameStrings('ContactForm field', 'ContactForm fields');
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
            'name' => 'city',
            'label' => 'Поле город'
        ]);
        CRUD::addColumn([
            'name' => 'name',
            'label' => 'Поле имя '
        ]);
        CRUD::addColumn([
            'name' => 'tel_number',
            'label' => 'Поле телефон'
        ]);
        CRUD::addColumn([
            'name' => 'message_placeholder',
            'label' => 'Заполнитель поля с сообщением'
        ]);
        CRUD::column('contactForm_id');

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
            'name' => 'city',
            'label' => 'Город'
        ]);
        CRUD::addField([
            'name' => 'name',
            'label' => 'Имя'
        ]);
        CRUD::addField([
            'name' => 'tel_number',
            'label' => 'Номер телефона'
        ]);
        CRUD::addField([
            'name' => 'message_placeholder',
            'label' => 'Заполнитель поля с сообщением'
        ]);
        CRUD::addField([
            'name' => 'contactForm_id',
            'label' => 'ContactForm Id',
            'type' => 'select',
            'model' => 'App\Models\ContactForm',
            'attribute' => 'id'
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
