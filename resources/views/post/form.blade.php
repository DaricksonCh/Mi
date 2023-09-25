<h1>{{$modo}} Publicaciones</h1>

<style>
  .container{
    width: 600px;
  }
</style>

<div class="mb-3 form-floating">
  <input type="text" class="form-control" name="title" placeholder="Titulo">
  <label for="exampleFormControlInput1" class="form-label" value="{{isset($post->title) ? $post->title : old('title')}}">Titulo</label>
</div>

<div class="mb-3 form-floating">
  <input type="file" class="form-control" name="photo" placeholder="Archivo">
  <label for="exampleFormControlInput1" class="form-label">Archivo</label>
</div>

<div class="mb-3 form-floating">
  <textarea class="form-control" placeholder="Contenido..." rows="3" name="content"></textarea>
  <label for="exampleFormControlTextarea1" class="form-label" value="{{isset($post->content) ? $post->content : old('content')}}">Contenido...</label>
</div>

<div class="text-right">
  <input type="submit" class="btn btn-primary" value="Publicar">
</div>
