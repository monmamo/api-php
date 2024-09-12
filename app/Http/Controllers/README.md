```php
use App\Models\CONCEPT;
class CONCEPTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){}

    /**
     * Show the form for creating a new resource.
     */
    public function create(){}

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\StoreCONCEPTRequest $request){}

    /**
     * Display the specified resource.
     */
    public function show(\App\Models\CONCEPT $community){}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CONCEPT $community){}

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\UpdateCONCEPTRequest $request, CONCEPT $community){}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CONCEPT $community){}
}
```