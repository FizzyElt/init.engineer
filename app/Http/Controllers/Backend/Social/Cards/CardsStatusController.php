<?php

namespace App\Http\Controllers\Backend\Social\Cards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Social\CardsRepository;
use App\Http\Requests\Backend\Social\Cards\ManageCardsRequest;

/**
 * Class CardsStatusController.
 */
class CardsStatusController extends Controller
{
    /**
     * @var CardsRepository
     */
    protected $cardsRepository;

    /**
     * @param CardsRepository $cardsRepository
     */
    public function __construct(CardsRepository $cardsRepository)
    {
        $this->cardsRepository = $cardsRepository;
    }

    /**
     * @param ManageCardsRequest $request
     *
     * @return mixed
     */
    public function getDeactivated(ManageCardsRequest $request)
    {
        return view('backend.social.cards.deactivated')
            ->withCards($this->cardsRepository->getInactivePaginated());
    }

    /**
     * @param ManageCardsRequest $request
     *
     * @return mixed
     */
    public function getDeleted(ManageCardsRequest $request)
    {
        return view('backend.social.cards.deleted')
            ->withCards($this->cardsRepository->getDeletedPaginated());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
