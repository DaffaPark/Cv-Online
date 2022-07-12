@extends('layouts.murid')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6" style="margin-top:10px">
             <h1>Cari Data</h1>
             <form action="/findfilm" method="GET">
            <div class="row mb-2">
                <div class="col-sm-8">
                   <input type="text" class="form-control" name="query" placeholder="Masukan NIS...." value="{{ request()->input('query') }}">
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                </div>
             <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
         </div>
        </div>          
             </form>
             @if(isset($murids))


<table class="table table-striped table-bordered">
 <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">kelas</th>
      <th scope="col">Jurusan</th>  
      <th scope="col">Aksi</th>
    </tr>
                   </thead>
                   <tbody>
                       @if(count($murids) > 0)
                           @foreach($murids as $index => $row )
                              <tr>
                                  <th scope="row">{{ $index + $murids->firstItem() }}</th>
                                  <td>{{ $row->nis }}</td>
                                  <td>{{ $row->name }}</td>
                                  <td>{{ $row->kelas }}</td>
                                  <td>{{ $row->jurusan }}</td>
                                  <td>
                                  <a href="/exportfilm/{{ $row->id }}" class="btn btn-outline-danger">Cetak</a>
                                </td>
                              </tr>
                           @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   </tbody>
               </table>

               <div class="pagination-block">
                   <?php //{{ $murids->links('layouts.paginationlinks') }} ?>
                   {{  $murids->appends(request()->input())->links('layouts.paginationlinks') }}
               </div>

             @endif
          </div>
       </div>
    </div>
</body>
</html>
 @endsection


