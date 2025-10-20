    <div class="modal fade" id="modalEdit{{ $value->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form action="{{ url('transaksi', $value->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Pelanggan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama_pelanggan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Layanan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="layanan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="kategori" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Berat Cucian (kg) <span class="text-danger">*</span></label>
                            <input type="number" step="0.1" class="form-control" name="berat_cucian" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Total Harga (Rp) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="total_harga" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Waktu Pengerjaan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="waktu_pengerjaan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status Pengerjaan <span class="text-danger">*</span></label>
                            <select class="form-control" name="status_pengerjaan" required>
                                <option value="Belum Diproses">Belum Diproses</option>
                                <option value="Sedang Dikerjakan">Sedang Dikerjakan</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status Pembayaran <span class="text-danger">*</span></label>
                            <select class="form-control" name="status_pembayaran" required>
                                <option value="Belum Dibayar">Belum Dibayar</option>
                                <option value="Sudah Dibayar">Sudah Dibayar</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Catatan</label>
                            <textarea class="form-control" name="catatan" rows="2" placeholder="Opsional"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger light"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>