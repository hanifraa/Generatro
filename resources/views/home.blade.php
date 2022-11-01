@extends('layouts.main')

@section('container')

<div class="sectionhome">

    <div class="sloganteng">
        <h1>Your Random Number Generatro</h1>
    </div>

        <?php
            $numb = rand(10,100);
            if (isset($_GET['submit'])) {
                $numb = rand(10,100);
            }
        ?>

    <div class="wrapper">

        <div class="number">
            <?php echo $numb ?>
        </div>

        <div class="desc">
            @if($numb%2!=0)
                <div>Odd</div>
            @else
                <div>Even</div>
            @endif
        </div>

        <form method="GET">
            <input class="button" type="submit" name="submit" value="Generate">
       </form>

    </div>

</div>



@endsection

