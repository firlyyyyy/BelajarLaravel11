<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Localization Laravel</title>
</head>
<body>
    <h2>@lang('biodata.welcome')</h2>
    
    <p>@lang('biodata.title')</p>

    <form action="">
        <div>
            <label for="">@lang('biodata.profil.name')</label>
            <input type="text">
        </div>

        <div>
            <label for="">@lang('biodata.profil.address')</label>
            <input type="text">
        </div>

        <div>
            <label for="">@lang('biodata.profil.hobby')</label>
            <input type="text">
        </div>

        <div>
            <label for="">@lang('biodata.profil.job')</label>
            <input type="text">
        </div>

        <div>
            <button>@lang('biodata.button')</button>
        </div>
    </form>

    <p>@lang('biodata.thank')</p>
</body>
</html>