<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cool Login form | By Code Info</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <a href="{{ route('admin.logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>
    <h1>Todo List</h1>
    <ul>
        <li>Groceries
            <ul>
                <li>3 Tomatoes</li>
                <li>1 bunch of cherries</li>
                <li>6 onions</li>
                <li>3 heads of garlic</li>
                <li>1 bag spring mix</li>
            </ul>
        </li>
        <li>Cancel gym membership</li>
        <li>Clean gutters</li>
        <li>Take package to the post office</li>
        <li>Call Avery about Ali's party (afternoon)</li>
        <li>Sort recycling & put out trash</li>
    </ul>
</body>

</html>