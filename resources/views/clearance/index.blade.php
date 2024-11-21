<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clearance Progress</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">
    <x-app-layout>
<div class="container">
    <h1>Clearance Progress</h1>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%;" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">{{ $progress }}%</div>
    </div>

    @foreach ($departments as $department)
        <div class="card mt-4">
            <div class="card-header">
                {{ $department->name }}
            </div>
            <div class="card-body">
                @if ($department->cleared)
                    <p class="text-success">Cleared</p>
                @else
                    <form action="{{ route('clearance.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="department_id" value="{{ $department->id }}">
                        <div class="form-group">
                            <label for="document">Upload Document</label>
                            <input type="file" name="document" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
</div>
</x-app-layout>









   
</body>

</html>
