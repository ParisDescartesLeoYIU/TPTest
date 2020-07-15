<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="base-url" content="{{ url('/') }}" />
    <title>Calculatrice</title>
</head>
<body>

<form method="POST" action="{{url('/calculatrice)}}">
    @csrf
    <div class="row">
        <div class="col-md-12 col-lg-6 py-3" >
            <div class="form-group">
                <label for="company">Premier nombre</label>
                <label>
                    <input type="number" class="form-control" name="firstNumber">
                </label>
                <select id="operateur" name="operateur">
                    <option value="">--Please choose an option--</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">x</option>
                    <option value="%">/</option>
                </select>
                <label>
                    <input type="number" class="form-control" name="secondNumber">
                </label>
            </div>
        </div>
        <div class=" my-5 col-md-12" style="text-align: end">
            <button type="submit" class="btn btn-primary m-2">Calculer</button>
        </div>
    </div>
</form>

<script src="{{asset(mix('js/website/website.js'))}}"></script>
@yield ('scripts')

</body>
</html>
