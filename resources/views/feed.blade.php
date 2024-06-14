<!DOCTYPE html>
<html>
<head>
    <title>News Feed</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/table_style.css') }}">
    <style>
        
    </style>
</head>
<body>

<div class="container">
    <h2 class="my-4">News Data</h2>
    <table id="FeedsTable" class="display table table-striped table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th>Pub Date</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item['title'] ?? '' }}</td>
                    <td>{{ $item['description'] ?? '' }}</td>
                    <td><a href="{{ $item['link'] ?? '#' }}" target="_blank">{{ $item['link'] ?? '#' }}</a></td>
                    <td>{{ $item['pubDate'] ?? '' }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="{{ asset('js/table_script.js') }}"></script>

<!-- Initialize DataTables -->
<script>
    
</script>

</body>
</html>
