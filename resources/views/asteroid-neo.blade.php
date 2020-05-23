<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asteroid New App</title>
</head>
<body>
    <h2>
    plot a line chart showing number of asteroids passing near earth each day
    </h2>
    <p>
    nearest asteroid and the fastest asteroid
    </p>
    <form action="asteroidcontroller" method="get">
        @csrf
        <label for="start-date">start date : </label>
        <input type="date" name="from-date" id="from">
        <label for="end-date">end date : </label>
        <input type="date" name="to-date" id="to">
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>

    <pre>
    A) Show the following stats (deduced from the data you will receive from Neo Feed)
    Fastest Asteroid in km/h (Respective Asteroid ID & its speed)
    Closest Asteroid (Respective Asteroid ID & its distance)
    Average Size of the Asteroids in kilometers

    B) Plot a graph showing total number of asteroids for each day of the given date range. Use a bar or line chart for the same.

    </pre>

   


</body>
</html>