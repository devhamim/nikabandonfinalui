<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            @if($setting->first()->footer != null)
                <span>{{ $setting->first()->footer }} </span>
            @endif
            | All Rights Reserved
          </p>
    </div>
</footer>
