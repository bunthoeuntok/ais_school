<div class="list-icons">
    <div class="dropdown">
        <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('user-management.modules.edit', $module->id) }}" class="dropdown-item"><i class="icon-file-stats"></i> Update</a>
            <div class="dropdown-divider"></div>
            <form action="" method="post">
                @method('delete')
                @csrf
                <button class="dropdown-item"><i class="icon-gear"></i> Delete</button>
            </form>
        </div>
    </div>
</div>
