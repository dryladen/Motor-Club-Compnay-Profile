<!-- contact -->
<section class="section bg-gray pt-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Kontak Kami</h2>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form name="contact" action="{{ site.Params.contact_form_action | safeURL }}" method="POST" data-netlify="true" netlify>
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Nama Kalian" required>
          <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email / No. Whatsapp" required>
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Keperluan/Subject" required>
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Pesan Kalian" required></textarea>
          <button type="submit" value="send" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="none">
          <li class="list mr-xl-5 mr-4 mb-3">
              <div class="d-flex align-items-center">
                  <i class="ti-location-pin text-primary icon-md mr-2"></i>
                  <div class="text-left">
                      <h6 class="mb-0">Alamat</h6>
                      <p class="mb-0">Jl. A. Natasukarya No.30 Subang, Jawa Barat. 41214</p>
                  </div>
              </div>
          </li>
          <li class="list mr-xl-5 mr-4 mb-3">
              <div class="d-flex align-items-center">
                  <i class="ti-angle-right text-primary icon-md mr-2"></i>
                  <div class="text-left">
                      <h6 class="mb-0">No Telpon</h6>
                      <p class="mb-0">+62 821 1010 2004</p>
                  </div>
              </div>
          </li>
          <li class="list mr-xl-5 mr-4 mb-3">
              <div class="d-flex align-items-center">
                  <i class="ti-email text-primary icon-md mr-2"></i>
                  <div class="text-left">
                      <h6 class="mb-0">Email</h6>
                      <p class="mb-0">info@tiger-club.or.id</p>
                  </div>
              </div>
          </li>
      </ul>
      </div>
    </div>
  </div>
</section>


