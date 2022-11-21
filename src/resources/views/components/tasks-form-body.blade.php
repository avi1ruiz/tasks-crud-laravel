<div>
    @csrf
    <label for="InputTitle" class="form-label">Nombre de la tarea</label>
    <input type="text" name="title" class="form-control" id="InputTitle" placeholder="..."
        value="{{ old('title', $tasks->title) }}">
    <div class="form-check">
        <label for="InputState" class="form-check-label">Finalizada</label>
        <input type="checkbox" name="state" id="InputState" class="form-check-input" value="1" @checked(old('state', $tasks->state))>
    </div>
    <label for="InputLimit" class="form-label">Fecha Limite</label>
    <input type="datetime-local" name="limit" id="InputLimit" class="form-control" value="{{ old('limit', $tasks->limit->format('Y-m-d\TH:i')) }}">
    <label for="InputDescription" class="form-label">Descripción tarea</label>
    <textarea name="description" id="InputDescription" cols="30" rows="10" class="form-control">{{ old('description', $tasks->description) }}</textarea>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
