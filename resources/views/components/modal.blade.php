
<button type="button" class="btn btn-{{ $warna }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
  {{ $slot }}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal {{ $modal }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Pindah halaman?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary bg-primary"><a href={{ $link }}>NEXT</a></button>
      </div>
    </div>
  </div>
</div>