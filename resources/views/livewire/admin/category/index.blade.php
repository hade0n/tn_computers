<div class="row">
    <div class="col-md-12 grid-margin">

        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div> 
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Categorie
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary float-end">Aggiungi Categoria</a>
                </h4>
            </div>

            <div class="card-body">
                <table class="table table-border table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Stato</th>
                            <th>Azione</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status == '1' ? 'Hidden':'Visible'}}</td>
                                <td>
                                    <a href="{{ url('admin/category/'.$category->id.'/edit') }}" class="btn btn-success">Modifica</a>
                                    <a href="" class="btn btn-danger">Elimina</a>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>

                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>