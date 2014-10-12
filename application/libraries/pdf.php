<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter PDF Library
 *
 * Generate PDF's in your CodeIgniter applications.
 *
 * @package			CodeIgniter
 * @subpackage		Libraries
 * @category		Libraries
 * @author			Chris Harvey
 * @license			MIT License
 * @link			https://github.com/chrisnharvey/CodeIgniter-PDF-Generator-Library
 */

require_once(APPPATH.'third_party/dompdf/dompdf_config.inc.php');
ini_set("memory_limit", "32M");

class Pdf extends DOMPDF
{
	/**
	 * Get an instance of CodeIgniter
	 *
	 * @access	protected
	 * @return	void
	 */
	protected function ci()
	{
		return get_instance();
	}

	/**
	 * Load a CodeIgniter view into domPDF
	 *
	 * @access	public
	 * @param	string	$view The view to load
	 * @param	array	$data The view data
	 * @return	void
	 */
	public function load_view($view, $data = array())
	{
		$html = $this->ci()->load->view($view, $data, TRUE);
		$this->load_html($html);
	}
        
        public function pdf_create($html, $filename, $stream = TRUE, $orientation = "portrait") {

        $dompdf = new DOMPDF();
        $dompdf->set_paper("a4", $orientation);
        $dompdf->load_html($html);
        $dompdf->render();
            if ($stream) { //open only
                $dompdf->stream($filename . ".pdf");
            } else { // save to file only, your going to load the file helper for this one
                write_file("pdf/$filename.pdf", $dompdf->output());
            }
        }
        
    function create_pdf($html, $filename, $stream=true, $papersize = 'letter', $orientation = 'portrait')
    {
//        require_once("dompdf/dompdf_config.inc.php");
 
        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->set_paper($papersize, $orientation);
        $dompdf->render();
 
        if ($stream)
        {
            $options['Attachment'] = 1;
            $options['Accept-Ranges'] = 0;
            $options['compress'] = 1;
            $dompdf->stream($filename.".pdf", $options);
        }
        else
        {
            write_file("$filename.pdf", $dompdf->output());
        }
    }

}