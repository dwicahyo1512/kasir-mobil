<!-- login -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	// untuk login
	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}
	// memroses login
	public function process()
	{
		// semua post masuk
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			// melempar kembali user_m(function login)
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			?>
			<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
				<script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
				<style>
					body{
						font-family: "Helvetica Neue",Arial, Helvetica, sans-serif;
						font-size: 1.124em;
						font-weight: normal;
					}
				</style>
				<body>
				</body>
				
			<?php
			if ($query->num_rows() > 0) {
				$row = $query->row();
				// mengambil user_id di database
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
                ?>
				<script>
						Swal.fire({
							icon: 'success',
							title: 'success',
							text: 'selamat, berhasil login'
						}).then((result) => {
							window.location='<?=site_url('dashboard')?>';
					})
				</script>
            <?php
			} else {
				?>
				<script>
						Swal.fire({
							icon: 'error',
							title: 'failure',
							text: 'login gagal,username / password salah'
						}).then((result) => {
							window.location='<?=site_url('auth/login')?>';
					})
				</script>
            <?php
			}
		}
	}

	// fungsi logout
	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
