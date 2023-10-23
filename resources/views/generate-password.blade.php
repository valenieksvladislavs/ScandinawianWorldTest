<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Generate password</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>
<body class="antialiased">
<div class="max-w-md p-8 mx-auto">
    <form id="generate-password-form">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Password generator</h2>
        <div class="mt-10 space-y-6">
            <div>
                <label for="length" class="block text-sm font-medium leading-6 text-gray-900">Type number of symbols</label>
                <div class="mt-2">
                    <input type="text" name="length" id="length" autocomplete="given-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="use-char-section space-y-6">
                <div class="use-char flex gap-x-3">
                    <div class="flex items-center">
                        <input id="useNumbers" name="useNumbers" type="checkbox" value="true" class="use-characters-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <label for="useNumbers" class="text-sm font-medium text-gray-900">Numbers without 0 and 1</label>
                </div>

                <div class="use-char flex gap-x-3">
                    <div class="flex items-center">
                        <input id="useUppercase" name="useUppercase" type="checkbox" value="true" class="use-characters-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <label for="useUppercase" class="text-sm font-medium text-gray-900">Big letters without 0 and 1</label>
                </div>

                <div class="use-char flex gap-x-3">
                    <div class="flex items-center">
                        <input id="useLowercase" name="useLowercase" type="checkbox" value="true" class="use-characters-group h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    </div>
                    <label for="useLowercase" class="text-sm font-medium text-gray-900">Small letters without "l"</label>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-center">
            <button type="submit" class="rounded-md bg-indigo-600 px-8 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Generate</button>
        </div>
    </form>
</div>
<div id="show-password" class="mt-6 px-8 text-5xl font-bold text-center break-words leading-loose"></div>
</body>
</html>
