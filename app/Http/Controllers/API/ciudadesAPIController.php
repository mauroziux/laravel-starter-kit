<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateciudadesAPIRequest;
use App\Http\Requests\API\UpdateciudadesAPIRequest;
use App\Models\ciudades;
use App\Repositories\ciudadesRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ciudadesController
 * @package App\Http\Controllers\API
 */

class ciudadesAPIController extends AppBaseController
{
    /** @var  ciudadesRepository */
    private $ciudadesRepository;

    public function __construct(ciudadesRepository $ciudadesRepo)
    {
        $this->ciudadesRepository = $ciudadesRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/ciudades",
     *      summary="Get a listing of the ciudades.",
     *      tags={"ciudades"},
     *      description="Get all ciudades",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/ciudades")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->ciudadesRepository->pushCriteria(new RequestCriteria($request));
        $this->ciudadesRepository->pushCriteria(new LimitOffsetCriteria($request));
        $ciudades = $this->ciudadesRepository->all();

        return $this->sendResponse($ciudades->toArray(), 'Ciudades retrieved successfully');
    }

    /**
     * @param CreateciudadesAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/ciudades",
     *      summary="Store a newly created ciudades in storage",
     *      tags={"ciudades"},
     *      description="Store ciudades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ciudades that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ciudades")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ciudades"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateciudadesAPIRequest $request)
    {
        $input = $request->all();

        $ciudades = $this->ciudadesRepository->create($input);

        return $this->sendResponse($ciudades->toArray(), 'Ciudades saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/ciudades/{id}",
     *      summary="Display the specified ciudades",
     *      tags={"ciudades"},
     *      description="Get ciudades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ciudades",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ciudades"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var ciudades $ciudades */
        $ciudades = $this->ciudadesRepository->findWithoutFail($id);

        if (empty($ciudades)) {
            return $this->sendError('Ciudades not found');
        }

        return $this->sendResponse($ciudades->toArray(), 'Ciudades retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateciudadesAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/ciudades/{id}",
     *      summary="Update the specified ciudades in storage",
     *      tags={"ciudades"},
     *      description="Update ciudades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ciudades",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ciudades that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ciudades")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ciudades"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateciudadesAPIRequest $request)
    {
        $input = $request->all();

        /** @var ciudades $ciudades */
        $ciudades = $this->ciudadesRepository->findWithoutFail($id);

        if (empty($ciudades)) {
            return $this->sendError('Ciudades not found');
        }

        $ciudades = $this->ciudadesRepository->update($input, $id);

        return $this->sendResponse($ciudades->toArray(), 'ciudades updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/ciudades/{id}",
     *      summary="Remove the specified ciudades from storage",
     *      tags={"ciudades"},
     *      description="Delete ciudades",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ciudades",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var ciudades $ciudades */
        $ciudades = $this->ciudadesRepository->findWithoutFail($id);

        if (empty($ciudades)) {
            return $this->sendError('Ciudades not found');
        }

        $ciudades->delete();

        return $this->sendResponse($id, 'Ciudades deleted successfully');
    }
}
