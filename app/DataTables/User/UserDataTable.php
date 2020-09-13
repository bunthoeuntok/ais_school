<?php

namespace App\DataTables\User;

use App\Models\User\Role;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
			->addColumn('role', function (User $user) {
				$user->roles->map(function (Role $role) {
					return $role->name;
				})->implode('<br>');
			})
            ->addColumn('action', function (User $user) {
            	return view('user-management.users.action', [
            		'user' => $user
				]);
			});
    }

	/**
	 * Get query source of dataTable.
	 *
	 * @param User $user
	 * @return Builder
	 */
    public function query(User $user)
    {
    	return $user->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('user-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1, 'acs')
					->parameters([
						'initComplete' => "function () {
							var fields = searchColumn();
                            this.api().columns().every(function () {
                            	var column = this;
                            	generateFormComponents(column, fields);
                            });
                            $('.data-table-multiselect').multiselect();
                        }"
					]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id', 'id')->addClass('text-center')->width(60),
            Column::make('name'),
            Column::make('email'),
            Column::make('role'),
            Column::make('created_at'),
            Column::make('updated_at')->visible(false),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'User\User_' . date('YmdHis');
    }
}
