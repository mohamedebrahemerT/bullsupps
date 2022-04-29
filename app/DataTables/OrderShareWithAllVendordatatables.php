<?php



namespace App\DataTables;



use App\OrderShareWithAllVendor;

use Yajra\DataTables\Services\DataTable;



class OrderShareWithAllVendordatatables extends DataTable

{

    /**

     * Build DataTable class.

     *

     * @param mixed $query Results from query() method.

     * @return \Yajra\DataTables\DataTableAbstract

     */

    public function dataTable($query)

    {

        return datatables($query)



        ->addColumn('edit', 'Admin.OrderShareWithAllVendor.btn.edit')

         ->addColumn('delete', 'Admin.OrderShareWithAllVendor.btn.delete')

         ->addColumn('checkbox', 'Admin.OrderShareWithAllVendor.btn.checkbox')

         ->addColumn('shipped', 'Admin.OrderShareWithAllVendor.btn.shipped')

         ->addColumn('showorder', 'Admin.OrderShareWithAllVendor.btn.showorder')
         ->addColumn('status', 'Admin.OrderShareWithAllVendor.btn.status')
         ->addColumn('shipNow', 'Admin.OrderShareWithAllVendor.btn.shipNow')
         ->addColumn('ReceivedNow', 'Admin.OrderShareWithAllVendor.btn.ReceivedNow')

         ->addColumn('details', 'Admin.OrderShareWithAllVendor.btn.details')
         ->addColumn('ViewTheinvoice', 'Admin.OrderShareWithAllVendor.btn.ViewTheinvoice')


       
        ->rawColumns([

            'edit','delete','checkbox','shipped','showorder','status',
            'shipNow','ReceivedNow','details','ViewTheinvoice'

        ]);



        



    }



    /**

     * Get query source of dataTable.

     *

     * @param \App\User $model

     * @return \Illuminate\Database\Eloquent\Builder

     */

    public function query(OrderShareWithAllVendor $model)

            {

                

                



   //  return OrderShareWithAllVendor::query()->with('order_idd')->with('admin_idd');



if (auth()->guard('admin')->user()->level == 'admin') 


{
   


                return OrderShareWithAllVendor::query()->with('order_idd')->with('admin_idd')->orderBy('id','desc')->where(function($q){

        
                        
                return $q->where('admin_id',1)->where('status',request('status'));

              


            

        });

}

elseif (auth()->guard('admin')->user()->level == 'affiliate' )

 {

      return OrderShareWithAllVendor::query()->where('affiliateID',auth()->guard('admin')->user()->id)->with('order_idd')->with('admin_idd')->orderBy('id','desc')->where(function($q){

        
                        
                return $q->where('admin_id',1)->where('status',request('status'));

              


            

        });
    
}



            }



    /**

     * Optional method if you want to use html builder.

     *

     * @return \Yajra\DataTables\Html\Builder

     */

    public function html()

    {

        return $this->builder()

                    ->columns($this->getColumns())

                    ->minifiedAjax()

                 // ->addAction(['width' => '80px'])

                    ->parameters( [



                         'dom'=>'Bfrtip',

        'lengthMenu'=>[[10,25,50,100],[5,20,30,40,'all']],

        'buttons'=> [



     


     

                      

                

                    

    ],  

 

                        'initComplete' => "function () {

            this.api().columns([2,3,4]).every(function () {

                var column = this;

                var input = document.createElement(\"input\");

                $(input).appendTo($(column.footer()).empty())

                .on('keyup', function () {

                    column.search($(this).val(), false, false, true).draw();

                });

            });

        }",

          'language' => [  

            "sProcessing"     =>trans('admin.Processing')    ,

            "sZeroRecords" =>trans('admin.sZeroRecords')    ,

            "sEmptyTable"    =>trans('admin.sEmptyTable')    ,

            "sInfo"          =>trans('admin.sInfo')    ,

            "sLengthMenu"     =>trans('admin.sLengthMenu')    ,

            "sZeroRecords"    =>trans('admin.sZeroRecords')   ,

            "sEmptyTable"     =>trans('admin.sEmptyTable')    ,

            "sInfo"           =>trans('admin.sEmptyTable')    ,

            "sInfoEmpty"      =>trans('admin.sInfo')          ,

            "sInfoFiltered"   =>trans('admin.sInfoFiltered')     ,           

            "sSearch"         =>trans('admin.sInfoPostFix')   ,

            "sUrl"            =>trans('admin.sSearch')        ,

            "sInfoThousands"  =>trans('admin.sInfoThousands') ,

            "sLoadingRecords" =>trans('admin.sLoadingRecords'),

              "oPaginate"=> [

        "sFirst" =>trans('admin.sFirst') ,

        "sPrevious" =>trans('admin.sPrevious') ,

        "sNext" =>trans('admin.sNext') ,

        "sLast" =>trans('admin.sLast') ,

    ],

            

            "oAria"           =>[

            "sSortAscending"  =>trans('admin.sSortAscending') ,

            "sSortDescending" =>trans('admin.sSortDescending'), 

           ]

             



           ]



                    ]



                  





          

                    );

    }



    /**

     * Get columns.

     *

     * @return array

     */

    protected function getColumns()

    {



 

               if ( auth()->guard('admin')->user()->level =='admin')

                {

                 return [

                [

                'name'=> 'checkbox',

                'data'=> 'checkbox',

               'title'=>'<input type="checkbox" onclick="checkall()" class="checck_all">  ',

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,





            ],  

               
              [

                'name'=> 'created_at',

                'data'=> 'created_at',

                'title'=>trans('admin.date'),



            ],

         
 
            [

                'name'=> 'order_id',

                'data'=> 'order_idd.billing_total',

                'title'=>trans('admin.billing_total'),



            ],

            
 

             
  
              [

                'name'=> 'shipNow',

                'data'=> 'shipNow',

                'title'=>trans('admin.shipNow'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,
            ],


            
              [

                'name'=> 'ReceivedNow',

                'data'=> 'ReceivedNow',

                'title'=>trans('admin.ReceivedNow'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,
            ],

            
  

            

            [

                'name'=> 'edit',

                'data'=> 'edit',

                'title'=>trans('admin.edit'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,





            ],

              [

                'name'=> 'delete',

                'data'=> 'delete',

               'title'=>trans('admin.delete'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,





            ],

                 [

                'name'=> 'ViewTheinvoice',
 
                'data'=> 'ViewTheinvoice',

                'title'=>trans('admin.ViewTheinvoice'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,





            ],




              [

                'name'=> 'showorder',

                'data'=> 'showorder',

                'title'=>trans('admin.showorder'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,





            ],

        


            

            

            

        ];

               }

               else

               {

                  return [

                [

                'name'=> 'checkbox',

                'data'=> 'checkbox',

               'title'=>'<input type="checkbox" onclick="checkall()" class="checck_all">  ',

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,





            ],  

              [

                'name'=> 'order_id',

                'data'=> 'order_id',

                'title'=>trans('admin.order_id'),



            ],

              

            [

                'name'=> 'status',

                'data'=> 'status',

                'title'=>trans('admin.status'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,
            ],

            [

                'name'=> 'billing_name',

                'data'=> 'order_idd.billing_name',

                'title'=>trans('admin.billing_name'),



            ],

            [

                'name'=> 'order_id',

                'data'=> 'order_idd.billing_subtotal',

                'title'=>trans('admin.billing_subtotal'),



            ],

            [

                'name'=> 'order_id',

                'data'=> 'order_idd.billing_total',

                'title'=>trans('admin.billing_total'),



            ],

            

              [

                'name'=> 'admin_id',

                'data'=> 'admin_idd.name',

                'title'=>trans('admin.admin_id'),



            ],

  

            

            

     



              [

                'name'=> 'showorder',

                'data'=> 'showorder',

                'title'=>trans('admin.showorder'),

                 'exportable'=>false,

                 'printable'=>false,

                 'orderable'=>false,

                 'searshable'=>false,





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

        return 'Users_' . date('YmdHis');

    }

}

