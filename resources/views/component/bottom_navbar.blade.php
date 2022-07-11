<div class="buttom-navbar fixed-bottom">
    <div class="row">
        <div class="col-4">
            <a href="{{ route('dashboard') }}" style="color: inherit; text-decoration: none;">
                {{-- <i class="fa-solid fa-house fa-2x" style="color: #268C29;"></i> --}}
                <span class="iconify active" data-icon="bx:home" style="font-size: 45px;"></span>
            </a>
        </div>
        <div class="col-4">
            <a href="{{ route('post.index') }}" style="color: inherit; text-decoration: none;">
                {{-- <i class="fa-solid fa-circle-plus fa-2x"></i> --}}
                <span class="iconify" data-icon="akar-icons:circle-plus" style="font-size: 45px;"></span>
            </a>
        </div>
        <div class="col-4">
            <a href="{{ route('profile.index') }}" style="text-decoration: none; color: inherit" class="">
                {{-- <i class="fa-solid fa-circle-user fa-2x">
                </i> --}}
                <span class="iconify" data-icon="bx:user-circle" style="font-size: 45px;"></span>
            </a>
        </div>
    </div>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</div>
