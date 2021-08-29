@props(['lable'])

<div class="form-group">
    <label>{{ $lable ?? '' }}</label>
    <input type="text" class="form-control">
</div>