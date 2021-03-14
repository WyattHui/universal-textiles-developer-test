<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\TShirt;
use App\Http\Requests\TShirtCalculatePackSizeRequest;

class TShirtController extends Controller
{
    public function calulatePackSize(TShirtCalculatePackSizeRequest $request)
    {
        $qty = $request->qty;

        $packSizes = TShirt::getPackSizes();
        $result = [];

        $qtyCount = $qty;
        foreach ($packSizes as $key => $packSize) {
            $packQty = floor($qtyCount / $packSize);

            if ($packQty >= 1) {
                $result[$packSize] = $packQty;
                $qtyCount -= $packSize * $packQty;
            }

            $sumOfSmallerPacksQty = array_sum(array_slice($packSizes, $key + 1));
            if ($sumOfSmallerPacksQty < $qtyCount) {
                $result[$packSize] = $result[$packSize] ?? 0;
                $result[$packSize] += 1;
                break;
            }
        }

        return $result;
    }
}
