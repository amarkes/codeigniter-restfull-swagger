<?php
use Swagger\Annotations as SWG;
/**
 * @package
 * @category
 * @subpackage
 *
 * @SWG\Resource(
 *  apiVersion="0.2",
 *  swaggerVersion="1.2",
 *  resourcePath="/lista",
 *  basePath="http://localhost/avulso/ci-3-restfull-swagger/api/",
 *  produces="['application/json']",
 * )
 */
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Lista extends REST_Controller {
    function __construct()
    {
        parent::__construct();
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST, PUT,DELETE, OPTIONS");
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
            exit(0);
        }

    }

    /**
     *
     * @SWG\Api(
     *   path="lista",
     *   description="get",
     *   @SWG\Operations(
     *     @SWG\Operation(
     *       method="GET",
     *       summary="get lista",
     *       notes="Returns a string",
     *       nickname="helloWord",
     *       @SWG\Parameters(
     *         @SWG\Parameter(
     *           name="id",
     *           description="id table",
     *           paramType="query",
     *           required=false,
     *           type="string"
     *         ),
     *        @SWG\Parameter(
     *           name="fornecedor_id",
     *           description="id do fornecedor",
     *           paramType="query",
     *           required=false,
     *           type="string"
     *         ),
     *         @SWG\Parameter(
     *           name="status",
     *           description="status A - B - I",
     *           paramType="query",
     *           required=false,
     *           type="string"
     *         ),
     *       ),
     *       @SWG\ResponseMessages(
     *          @SWG\ResponseMessage(
     *            code=400,
     *            message="Invalid username"
     *          ),
     *          @SWG\ResponseMessage(
     *            code=404,
     *            message="Not found"
     *          )
     *       )
     *     )
     *   )
     * )
     */

    public function index_get()
    {
        $id = $this->get('id');
        $fornecedor_id = $this->get('fornecedor_id');
        $status = $this->get('status');
        $offset = $this->get('offset');
        $limit = $this->get('limit');
        $this->load->model('servicesmodel');
        $data = [];
        if($id == null) {
          if($fornecedor_id != null) {
            $data['fornecedor_id'] = $fornecedor_id;
          }
          if($status != null) {
            $data['status'] = $status;
          }
          $response = $this->servicesmodel->get('lista', $data , null, null);
       } else {
         if($limit == null) { $limit == 20; }
         if($offset == null) { $offset == 0; }
         $data = array('id' => $id, );
         if($fornecedor_id != null) {
           $data['fornecedor_id'] = $fornecedor_id;
         }
         if($status != null) {
           $data['status'] = $status;
         }
         $response = $this->servicesmodel->get('lista', $data , $limit, $offset);
       }
       if($response) {
         $this->response($response, REST_Controller::HTTP_OK);
       } else {
         $this->set_response([
            'status' => FALSE,
            'message' => 'Response could not be found'
        ], REST_Controller::HTTP_NOT_FOUND);
       }
    }


    /**
     *
     * @SWG\Api(
     *   path="lista",
     *   description="post",
     *   @SWG\Operations(
     *     @SWG\Operation(
     *       method="post",
     *       summary="get lista",
     *       notes="Returns a string",
     *       nickname="helloWord",
     *       @SWG\Parameters(
     *         @SWG\Parameter(
     *           name="body",
     *           description="id table",
     *          paramType="body",
     *          required=false,
     *          type="Lista"
     *         ),
     *       ),
     *
     *       @SWG\ResponseMessages(
     *          @SWG\ResponseMessage(
     *            code=400,
     *            message="Invalid username"
     *          ),
     *          @SWG\ResponseMessage(
     *            code=404,
     *            message="Not found"
     *          )
     *       )
     *     )
     *   )
     * )
     */





    public function index_post()
    {
      $fornecedor_id = $this->post('fornecedor_id');
      $nome = $this->post('nome');
      $valor = $this->post('valor');
      $status = $this->post('status');
      if($fornecedor_id != null AND $nome != null AND $valor != null AND $status != null){
        $this->load->model('servicesmodel');
        $data = array(
          'fornecedor_id' => $fornecedor_id,
          'nome' => $nome,
          'valor' => $valor,
          'status' => $status
        );
        $response = $this->servicesmodel->post('lista', $data);
      } else {
        $response = null;
      }

      if($response != null) {
        $this->response($response, REST_Controller::HTTP_OK);
      } else {
        $this->set_response([
           'status' => FALSE,
           'message' => 'Field null set [fornecedor_id, nome, valor, status]'
       ], REST_Controller::HTTP_OK);
      }

    }
    public function index_put()
    {
      $id = $this->put('id');
      $fornecedor_id = $this->put('fornecedor_id');
      $nome = $this->put('nome');
      $valor = $this->put('valor');
      $status = $this->put('status');
      if($id != null) {
        $data = [];
        if($fornecedor_id != null) {
          $data['fornecedor_id'] = $fornecedor_id;
        }
        if($nome != null) {
          $data['nome'] = $nome;
        }
        if($valor != null) {
          $data['valor'] = $valor;
        }
        if($status != null) {
          $data['status'] = $status;
        }
        $this->load->model('servicesmodel');
        $response = $this->servicesmodel->put('lista', 'id', $id, $data);

      } else {
        $response = false;
      }
      if($response) {
        $this->response($response, REST_Controller::HTTP_OK);
      } else {
        $this->set_response([
           'status' => FALSE,
           'message' => 'Field null set [id*, fornecedor_id, nome, valor, status]'
       ], REST_Controller::HTTP_OK);
      }

    }

    public function index_delete()
    {
      $id = $this->uri->segment(3);
      if($id != null) {
        $this->load->model('servicesmodel');
        $response = $this->servicesmodel->delete('lista', 'id', $id);
      } else {
        $response = false;
      }
      if($response) {
        $this->response($response, REST_Controller::HTTP_OK);
      } else {
        $this->set_response([
           'status' => FALSE,
           'message' => 'Field id null set url + id'
       ], REST_Controller::HTTP_OK);
      }
    }
}
/**
 * @SWG\Model(id="Lista", required="fornecedor_id, nome, status",
 *     @SWG\Property(name="fornecedor_id",type="integer"),
 *     @SWG\Property(name="nome",type="array", @SWG\Items("Tag")),
 *     @SWG\Property(name="valor",type="string", enum="['available','pending','sold']"),
 *     @SWG\Property(name="status",type="string", format="int64",description="[A]tivo, [I]nativo, [B]loqueado")
 * )
*/
