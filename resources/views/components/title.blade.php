<style>
    @font-face {
        font-family: origin;
        src: url('Origin.ttf');
    }

    @font-face {
        font-family: over;
        src: url('over.ttf');
    }

    @font-face {
        font-family: speed;
        src: url('speed.ttf');
    }

    h1 {
        opacity: 1;
        font-weight: normal;
        letter-spacing: 3px;
    }
</style>

<div class="  text-2xl md:text-4xl lg:text-5xl">

    <h1 class="text-center   py-4  {{ $class }}  " style=" font-family: {{ $font }};">
        {{ $slot }}

    </h1>

</div>
