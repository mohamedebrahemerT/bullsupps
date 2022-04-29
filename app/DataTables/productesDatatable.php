<?php



namespace App\DataTables;



use App\product;

use Yajra\DataTables\Services\DataTable;



class productesDatatable extends DataTable

{

   /**

    * Build DataTable class.

    *

    * @param mixed $query Results from query() method.

    * @return \Yajra\DataTables\DataTableAbstract

    */

   public function dataTable($query)

   {

    if (auth()->guard('admin')->user()->level == 'affiliate') 
    {

        return datatables($query)

         ->addColumn('checkbox', 'Admin.productes.btn.checkbox')
      
         ->addColumn('photo', 'Admin.productes.btn.photo')
         ->addColumn('price', 'Admin.productes.btn.price')
         ->addColumn('stock', 'Admin.productes.btn.stock')
         ->addColumn('title_name_ar', 'Admin.productes.btn.title_name_ar')



         ->addColumn('showinweb', 'Admin.productes.btn.showinweb')

         ->addColumn('affiliateID', 'Admin.productes.btn.affiliateID')
         ->rawColumns([
          'photo',
          'price',
          'showinweb',

          'affiliateID',

          'stock',
          'checkbox',
          'title_name_ar'
      

         ]);
        
    }

    else
    {
        return datatables($query)

         ->addColumn('checkbox', 'Admin.productes.btn.checkbox')
         ->addColumn('photo', 'Admin.productes.btn.photo')
         ->addColumn('price', 'Admin.productes.btn.price')
         ->addColumn('stock', 'Admin.productes.btn.stock')

         ->addColumn('showinweb', 'Admin.productes.btn.showinweb')

         ->addColumn('affiliateID', 'Admin.productes.btn.affiliateID')

         ->addColumn('edit', 'Admin.productes.btn.edit')
         ->addColumn('delete', 'Admin.productes.btn.delete')
         ->rawColumns([
          'photo',
          'price',
          'showinweb',

          'affiliateID',

          'stock',
            'edit',
            'delete',
            'checkbox'

         ]);
    }

    

   }





   /**

    * Get query source of dataTable.

    *

    * @param \App\User $model

    * @return \Illuminate\Database\Eloquent\Builder

    */

   public function query()

   {

      return product::query()->orderBy('id','desc');

   }



   /**

    * Optional method if you want to use html builder.

    *

    * @return \Yajra\DataTables\Html\Builder

    */

   public function html()

   {


      if (auth()->guard('admin')->user()->level == 'affiliate') 
    {
       
 
        
      return $this->builder()

         ->columns($this->getColumns())

         ->minifiedAjax()

         ->parameters([

            'dom'          => 'Blfrtip',

            'lengthMenu'   => [[10, 25, 50, 100], [10, 25, 50, trans('admin.all_record')]],

            'buttons'      => [ 

             



       



            ],

            'initComplete' => " function () {

                this.api().columns([2,3]).every(function () {

                    var column = this;

                    var input = document.createElement(\"input\");

                    $(input).appendTo($(column.footer()).empty())

                    .on('keyup', function () {

                        column.search($(this).val(), false, false, true).draw();

                    });

                });

            }",



            'language'     => datatable_lang(),



         ]);

            }

            else
            {


      return $this->builder()

         ->columns($this->getColumns())

         ->minifiedAjax()

         ->parameters([

            'dom'          => 'Blfrtip',

            'lengthMenu'   => [[10, 25, 50, 100], [10, 25, 50, trans('admin.all_record')]],

            'buttons'      => [

               [

                  'text' => '<i class="fa fa-plus"></i> ' . trans('admin.add'), 'className' => 'btn btn-info', "action" => "function(){



              window.location.href = '" . \URL::current() . "/create';

            }", ],



               ['extend' => 'print', 'className' => 'btn btn-primary', 'text' => '<i class="fa fa-print"></i>'],

               ['extend' => 'csv', 'className' => 'btn btn-info', 'text' => '<i class="fa fa-file"></i> ' . trans('admin.ex_csv')],

               ['extend' => 'excel', 'className' => 'btn btn-success', 'text' => '<i class="fa fa-file"></i> ' . trans('admin.ex_excel')],

               ['extend' => 'reload', 'className' => 'btn btn-default', 'text' => '<i class="fa fa-refresh"></i>'],

               [

                  'text' => '<i class="fa fa-trash"></i>', 'className' => 'btn btn-danger dellall'],



            ],

            'initComplete' => " function () {

                this.api().columns([2,3]).every(function () {

                    var column = this;

                    var input = document.createElement(\"input\");

                    $(input).appendTo($(column.footer()).empty())

                    .on('keyup', function () {

                        column.search($(this).val(), false, false, true).draw();

                    });

                });

            }",



            'language'     => datatable_lang(),



         ]);


            }

   }



   /**

    * Get columns.

    *

    * @return array

    */

   protected function getColumns()

   {

      if (auth()->guard('admin')->user()->level == 'affiliate') 
    {


      return [



 

           

         [

            'name'  => 'photo',

            'data'  => 'photo',

            'title' => trans('admin.photo'),

         ]  ,



        [

            'name'       => 'title_name_ar',

            'data'       => 'title_name_ar',

            'title'      => trans('admin.title_name_ar'),

            'exportable' => false,

            'printable'  => false,

            'orderable'  => false,

            'searchable' => false,

         ],



       

          [

            'name'  => 'price',

            'data'  => 'price',

            'title' => trans('admin.price'),

         ]  ,

           [

            'name'  => 'price_offer',

            'data'  => 'price_offer',

            'title' => trans('admin.price_offer'),

         ]  ,



          [

            'name'  => 'stock',

            'data'  => 'stock',

            'title' => trans('admin.stock'),

         ]  ,


     [

            'name'  => 'commistion',

            'data'  => 'commistion',

            'title' => trans('admin.commistion'),

         ]  ,

           



[

            'name'       => 'showinweb',

            'data'       => 'showinweb',

            'title'      => trans('admin.showinweb'),

            'exportable' => false,

            'printable'  => false,

            'orderable'  => false,

            'searchable' => false,

         ],

         

         [

            'name'       => 'affiliateID',

            'data'       => 'affiliateID',

            'title'      => trans('admin.affiliateID'),

            'exportable' => false,

            'printable'  => false,

            'orderable'  => false,

            'searchable' => false,

         ],



      ];

    }

      else
      {



      return [



         [

            'name'       => 'checkbox',

            'data'       => 'checkbox',

               'title'=>'<input type="checkbox" onclick="checkall()" class="checck_all">  ',

            

            'exportable' => false,

            'printable'  => false,

            'orderable'  => false,

            'searchable' => false,

         ], 

            [
                'name'  => 'id',
                'data'  => 'id',
                'title' => '#',
            ], 

         [

            'name'  => 'photo',

            'data'  => 'photo',

            'title' => trans('admin.photo'),

         ]  ,



        



         [

            'name'  => 'title_name_ar',

            'data'  => 'title_name_ar',

            'title' => 'اسم المنتج ',

         ]  ,

          [

            'name'  => 'price',

            'data'  => 'price',

            'title' => trans('admin.price'),

         ]  ,


          [

            'name'  => 'price_offer',

            'data'  => 'price_offer',

            'title' => trans('admin.price_offer'),

         ]  ,



          [

            'name'  => 'stock',

            'data'  => 'stock',

            'title' => trans('admin.stock'),

         ]  ,

 

           



[

            'name'       => 'showinweb',

            'data'       => 'showinweb',

            'title'      => trans('admin.showinweb'),

            'exportable' => false,

            'printable'  => false,

            'orderable'  => false,

            'searchable' => false,

         ],

         [

            'name'       => 'edit',

            'data'       => 'edit',

            'title'      => trans('admin.edit'),

            'exportable' => false,

            'printable'  => false,

            'orderable'  => false,

            'searchable' => false,

         ], [

            'name'       => 'delete',

            'data'       => 'delete',

            'title'      => trans('admin.delete'),

            'exportable' => false,

            'printable'  => false,

            'orderable'  => false,

            'searchable' => false,

         ],

         



      ];

      }

   }



   /**

    * Get filename for export.

    *

    * @return string

    */

   protected function filename()

   {

      return 'product_' . date('YmdHis');

   }

}

