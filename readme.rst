###################
INSTALL SWAGGER FOR PHP
###################


*******************
Instalation swagger from php
*******************
update you file in 

.. code-block:: http

    docs/index.html line 31 url = "YOU-URL-HERE/docs/json";
    
ssh or cmd
    
.. code-block:: bash

   $ cd docs/php

   $ php swagger.phar /home/www/application/controllers -o /home/www/docs/json


*******************
Api key usage from swagger
*******************

.. code-block:: http

    docs/index.html 64 window.authorizations.add("YOU-KEY-NAME", new ApiKeyAuthorization("YOU-KEY-NAME", key, "header"));
    
    
*******************
Set default key swagger
*******************

.. code-block:: http

    docs/index.html 73 var apiKey = "YOU-DEFAULT-KEY";



*******************
Insert in file controller
*******************
.. code-block:: bash

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
     *  basePath="YOU-URL-HERE/api/",
     *  produces="['application/json']",
     * )
     */


*******************
Insert GET METHOD
*******************

.. code-block:: bash

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


*******************
Insert POST METHOD
*******************

.. code-block:: bash
    
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
     
     
*******************
Insert MODEL METHOD
*******************

.. code-block:: bash
     
     /**
     * @SWG\Model(id="Lista", required="fornecedor_id, nome, status",
     *     @SWG\Property(name="fornecedor_id",type="integer"),
     *     @SWG\Property(name="nome",type="array", @SWG\Items("Tag")),
     *     @SWG\Property(name="valor",type="string", enum="['available','pending','sold']"),
     *     @SWG\Property(name="status",type="string", format="int64",description="[A]tivo, [I]nativo, [B]loqueado")
     * )
    */
    

*******************
Different programming languages represent primitives differently
*******************  

.. code-block:: bash

    /**
    type: integer, long, float, double, string, byte, boolean, date, dateTime
    format:int32, int64, float, double, , byte, , date, date-time
    Comments: signed 32 bits, signed 64 bits
    */

*******************
More for swagger
*******************

https://github.com/OAI/OpenAPI-Specification/blob/master/versions/1.2.md




###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community IRC <https://webchat.freenode.net/?channels=%23codeigniter>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
