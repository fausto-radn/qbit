
<div class="btn-group" role="group">
  <a href="{{ route($url .'.show',$id) }}" class="btn btn-outline-info btn-sm">
    <i class="fas fa-eye"></i>
    Detalles
  </a>
  <a href="{{ route($url .'.edit',$id) }}" class="btn btn-outline-warning btn-sm">
    <i class="fas fa-edit"></i>
    Editar
  </a>
  <form action="{{ route($url .'.destroy',$id) }}" method="post" class="form-delete">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger btn-sm">
      <i class="fas fa-trash"></i>
      Eliminar
    </button>
  </form>
</div>
