<x-layout.master>
    <x-slot:title>
        Study Level Categories
    </x-slot:title>
  
    <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><button class="table-sort" data-sort="sort-name_en">Category Name (EN)</button></th>
                        <th><button class="table-sort" data-sort="sort-name_ar">Category Name (AR)</button></th>
                        <th><button class="table-sort" data-sort="sort-code">Category Code</button></th>
                        <th><button class="table-sort" data-sort="sort-is_active">Is Active</button></th>
                        <th> Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-tbody">
                        @forelse ($categories as $category)
                            <tr>
                                <td class="sort-name_en">{{ $category->name_en }} </td>
                                <td class="sort-name_ar">{{ $category->name_ar }} </td>
                                <td class="sort-code">{{ $category->code }}</td>
                                <td class="sort-is_active">{{ $category->is_active }}</td>
                                <td >
                                    <div class="mb-3">
                                        <label class="form-check form-switch">
                                          <input title="Active & InActive Category" class="form-check-input" type="checkbox" {{ $category->is_active?'checked':'' }}>
                                        </label>
                                      </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Record Yet </td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                  </table>
                </div>

                {{-- --------------------- js  --}}
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                    const list = new List('table-default', {
                        sortClass: 'table-sort',
                        listClass: 'table-tbody',
                        valueNames: [ 'sort-name_en', 'sort-name_ar', 'sort-code', 'sort-is_active',
                            
                        ]
                    });
                    })
                  </script>
</x-layout.master>