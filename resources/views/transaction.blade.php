@extends('layouts.app')
@section('content')
<div class="container border shadow px-5 py-4 mt-3">
    <h3 class="col-4 mx-auto mb-4 py-2 text-center fw-bold" style="border: solid red">  Lite des transactions</h3>
    {{-- @livewire('transaction') --}}
    {{-- @if (Auth::user()->identifiant!)

    @else

    @endif --}}
    @isset(Auth::user()->identifiant)
    <table class="table table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Type</th>
                <th scope="col">Montant</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>30/11/2008</td>
                <td>Retrait</td>
                <td>100.0000</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>27/11/2008</td>
                <td>Retrait</td>
                <td>100.0000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>12/11/2008</td>
                <td>Retrait</td>
                <td>200000</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>27/10/2008</td>
                <td >Depôt</td>
                <td>100000</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>30/10/2008</td>
                <td >Transfert</td>
                <td>100000</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>27/10/2008</td>
                <td >Depôt</td>
                <td>300000</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>01/09/2008</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>27/08/2008</td>
                <td >Depôt</td>
                <td>100020</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>20/08/2008</td>
                <td >Retrait</td>
                <td>100200</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>10/08/2008</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>27/07/2008</td>
                <td>Depôt</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>17/07/2008</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>17/07/2008</td>
                <td >Transfert</td>
                <td>22299</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>27/06/2008</td>
                <td>Depôt</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>10/06/2008</td>
                <td >Retrait</td>
                <td>190000</td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>27/05/2008</td>
                <td >Depôt</td>
                <td>1200000</td>
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>10/05/2008</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">17</th>
                <td>28/04/2008</td>
                <td >Depôt</td>
                <td>100020</td>
              </tr>
              <tr>
                <th scope="row">18</th>
                <td>08/04/2008</td>
                <td >Retrait</td>
                <td>100200</td>
              </tr>
              <tr>
                <th scope="row">19</th>
                <td>27/03/2008</td>
                <td>Depôt</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">20</th>
                <td>24/03/2008</td>
                <td>Transfert</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">21</th>
                <td>10/03/2008</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">22</th>
                <td>27/02/2008</td>
                <td >Depôt</td>
                <td>2200299</td>
              </tr>
              <tr>
                <th scope="row">23</th>
                <td>01/00/2008</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">24</th>
                <td>27/01/2008</td>
                <td >Depôt</td>
                <td>1999999</td>
              </tr>
              <tr>
                <th scope="row">25</th>
                <td>10/01/2008</td>
                <td >Retrait</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">26</th>
                <td>01/01/2008</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">27</th>
                <td>01/01/2008</td>
                <td >Transfert</td>
                <td>100020</td>
              </tr>
              <tr>
                <th scope="row">28</th>
                <td>27/12/2007</td>
                <td >Depôt</td>
                <td>100200</td>
              </tr>
              <tr>
                <th scope="row">29</th>
                <td>24/12/2007</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">30</th>
                <td>01/12/2007</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">31</th>
                <td>27/11/2007</td>
                <td>Retrait</td>
                <td>100.0000</td>
              </tr>
              <tr>
                <th scope="row">32</th>
                <td>12/11/2007</td>
                <td>Retrait</td>
                <td>200000</td>
              </tr>
              <tr>
                <th scope="row">33</th>
                <td>27/10/2007</td>
                <td >Depôt</td>
                <td>100000</td>
              </tr>
              <tr>
                <th scope="row">34</th>
                <td>30/10/2006</td>
                <td >Transfert</td>
                <td>100000</td>
              </tr>
              <tr>
                <th scope="row">35</th>
                <td>27/10/2006</td>
                <td >Depôt</td>
                <td>300000</td>
              </tr>
              <tr>
                <th scope="row">36</th>
                <td>01/09/2006</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">37</th>
                <td>27/08/2006</td>
                <td >Depôt</td>
                <td>100020</td>
              </tr>
              <tr>
                <th scope="row">38</th>
                <td>20/08/2005</td>
                <td >Retrait</td>
                <td>100200</td>
              </tr>
              <tr>
                <th scope="row">39</th>
                <td>10/08/2005</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">40</th>
                <td>27/07/2005</td>
                <td>Depôt</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">41</th>
                <td>17/07/2004</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">42</th>
                <td>17/07/2004</td>
                <td >Transfert</td>
                <td>22299</td>
              </tr>
              <tr>
                <th scope="row">43</th>
                <td>27/06/2004</td>
                <td>Depôt</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">44</th>
                <td>10/06/2004</td>
                <td >Retrait</td>
                <td>190000</td>
              </tr>
              <tr>
                <th scope="row">45</th>
                <td>27/05/2004</td>
                <td >Depôt</td>
                <td>1200000</td>
              </tr>
              <tr>
                <th scope="row">46</th>
                <td>10/05/2003</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">47</th>
                <td>28/04/2003</td>
                <td >Depôt</td>
                <td>100020</td>
              </tr>
              <tr>
                <th scope="row">48</th>
                <td>08/04/2003</td>
                <td >Retrait</td>
                <td>100200</td>
              </tr>
              <tr>
                <th scope="row">49</th>
                <td>27/03/2003</td>
                <td>Depôt</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">50</th>
                <td>24/03/2003</td>
                <td>Transfert</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">51</th>
                <td>10/03/2003</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">52</th>
                <td>27/02/2003</td>
                <td >Depôt</td>
                <td>2200299</td>
              </tr>
              <tr>
                <th scope="row">53</th>
                <td>01/00/2003</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">54</th>
                <td>27/01/2003</td>
                <td >Depôt</td>
                <td>1999999</td>
              </tr>
              <tr>
                <th scope="row">55</th>
                <td>10/01/2003</td>
                <td >Retrait</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">56</th>
                <td>01/01/2003</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">57</th>
                <td>01/01/2002</td>
                <td >Transfert</td>
                <td>100020</td>
              </tr>
              <tr>
                <th scope="row">58</th>
                <td>27/12/2002</td>
                <td >Depôt</td>
                <td>100200</td>
              </tr>
              <tr>
                <th scope="row">59</th>
                <td>24/12/2002</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">60</th>
                <td>01/12/2002</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">61</th>
                <td>10/03/2002</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">62</th>
                <td>27/02/2003</td>
                <td >Depôt</td>
                <td>2200299</td>
              </tr>
              <tr>
                <th scope="row">63</th>
                <td>01/00/2003</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
              <tr>
                <th scope="row">64</th>
                <td>27/01/2003</td>
                <td >Depôt</td>
                <td>1999999</td>
              </tr>
              <tr>
                <th scope="row">65</th>
                <td>10/01/2003</td>
                <td >Retrait</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">65</th>
                <td>01/01/2003</td>
                <td>Retrait</td>
                <td>1000000</td>
              </tr>
        </tbody>
      </table>

    @else
      <strong class="text-danger fs-2">Pas de transaction</strong>
    @endisset
    <p class="placeholder-glow">
        <span class="placeholder col-12 placeholder-lg"></span>
      </p>

      <p class="placeholder-wave">
        <span class="placeholder col-12 placeholder-lg"></span>
      </p>
      <p class="placeholder-glow">
        <span class="placeholder col-12 placeholder-lg"></span>
      </p>
      <p class="placeholder-wave">
        <span class="placeholder col-12 placeholder-lg"></span>
      </p>
</div>
@endsection
