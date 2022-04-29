<?php

namespace App\DataTables;

use App\withdrawFromTotalMoney;
use Yajra\DataTables\Services\DataTable;

class withdrawFromTotalMoneyDatatable extends DataTable
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
         ->addColumn('checkbox', 'Admin.withdrawFromTotalMoney.btn.checkbox')
         ->addColumn('edit', 'Admin.withdrawFromTotalMoney.btn.edit')
         ->addColumn('delete', 'Admin.withdrawFromTotalMoney.btn.delete')
         ->addColumn('Accountant_id', 'Admin.withdrawFromTotalMoney.btn.Accountant_id')
         ->addColumn('IAgreeToWithdraw', 'Admin.withdrawFromTotalMoney.btn.IAgreeToWithdraw')
         ->addColumn('id', 'Admin.withdrawFromTotalMoney.btn.id')
         ->addColumn('status', 'Admin.withdrawFromTotalMoney.btn.status')
         ->rawColumns([
            'edit',
            'delete',
            'checkbox',
            'Accountant_id',
            'IAgreeToWithdraw',
            'id',
            'status'
         ]);


   }


   /**
    * Get query source of dataTable.
    *
    * @param \App\User $model
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function query()
   {

                   if ( auth()->guard('admin')->user()->level == 'admin' ) 
                   {
                   	  //  return withdrawFromTotalMoney::query();

                          return withdrawFromTotalMoney::query()->where(function($q){

        
                        
                return $q->where('status',request('status'));
            

        });


              
                   }
                   else
                   {

           return withdrawFromTotalMoney::query()->where(function($q){

        
                        
                return $q->where('Accountant_id',auth()->guard('admin')->user()->id)->where('status',request('status'));

              


            

        });

                   	 //   return withdrawFromTotalMoney::query()->with('Accountant_idd')->where('Accountant_id',auth()->guard('admin')->user()->id);

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
         ->parameters([
            'dom'          => 'Blfrtip',
            'lengthMenu'   => [[10, 25, 50, 100], [10, 25, 50, trans('admin.all_record')]],
            'buttons'      => [
               [
                  'text' => '<i class="fa fa-money"></i> ' . trans('admin.withdrawFromTotalMoney'), 'className' => 'btn btn-info', "action" => "function(){

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
		            this.api().columns([2,3,5]).every(function () {
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

   /**
    * Get columns.
    *
    * @return array
    */
   protected function getColumns()
   { 


			   	if ( auth()->guard('admin')->user()->level == 'admin' ) 
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
            'name'       => 'id',
            'data'       => 'id',
            'title'      => 'رقم العملية ',
            'exportable' => false,
            'printable'  => false,
            'orderable'  => false,
            'searchable' => false,
             ],
 				[
            'name'       => 'IAgreeToWithdraw',
            'data'       => 'IAgreeToWithdraw',
            'title'      => trans('admin.IAgreeToWithdraw'),
            'exportable' => false,
            'printable'  => false,
            'orderable'  => false,
            'searchable' => false,
        		 ],

          [
            'name'  => 'TheAmountToBeWithdrawn',
            'data'  => 'TheAmountToBeWithdrawn',
            'title' => trans('admin.withdrowamout'),
         ], [
            'name'  => 'TheGoalOfWithdrawingMoney',
            'data'  => 'TheGoalOfWithdrawingMoney',
            'title' => trans('admin.TheGoalOfWithdrawingMoney'),
         ] ,

          [
            'name'       => 'status',
            'data'       => 'status',
            'title'      => trans('admin.status'),
            'exportable' => false,
            'printable'  => false,
            'orderable'  => false,
            'searchable' => false,
             ],


         [
            'name'  => 'dateOfTheAmountToBeWithdrawn',
            'data'  => 'dateOfTheAmountToBeWithdrawn',
            'title' => trans('admin.dateOfTheAmountToBeWithdrawn'),
         ],
           


           [
            'name'       => 'Accountant_id',
            'data'       => 'Accountant_id',
            'title'      => trans('admin.Accountant_id'),
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
         ],


          [
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
         ], [
            'name'  => 'id',
            'data'  => 'id',
            'title' => '#', 
         ], [
            'name'  => 'TheAmountToBeWithdrawn',
            'data'  => 'TheAmountToBeWithdrawn',
            'title' => trans('admin.withdrowamout'),
         ], [
            'name'  => 'TheGoalOfWithdrawingMoney',
            'data'  => 'TheGoalOfWithdrawingMoney',
            'title' => trans('admin.TheGoalOfWithdrawingMoney'),
         ] ,
          [
            'name'  => 'day',
            'data'  => 'day',
            'title' => trans('admin.day'),
         ], [
            'name'  => 'dateOfTheAmountToBeWithdrawn',
            'data'  => 'dateOfTheAmountToBeWithdrawn',
            'title' => trans('admin.dateOfTheAmountToBeWithdrawn'),
         ],
          [
            'name'  => 'name',
            'data'  => 'name',
            'title' => trans('admin.Accountant_id'),
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
      return 'withdrawFromTotalMoney_' . date('YmdHis');
   }
}
