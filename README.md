# Laramon

Laramon is a project that utilizes the Laravel framework and uses MongoDB as its primary database. It provides developers with a simple and fast approach to create a complete CRUD API for specific collections within the MongoDB database. The project's main objective is to offer an efficient and streamlined solution for generating functional APIs for MongoDB

# How it works

### Creating the migration

To begin building your API, first you must create the migration files. For example, to create a Vehicles collection, you would need to run the following command :
 `php artisan make:migration create_vehicles_table`<br>


Once the migration file is created, enter all the column names and types in the `up()` function of the newly created migration file. Below is a simple example.

     public function up() {
        if (!Schema::hasCollection('vehicles')) {
            Schema::create('vehicles', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string("license_plate");
                $table->string("make");
            });
        }
    }

Once your migration file is ready, run the migration with the following command `php artisan migrate`

### Generating the CRUD API for the newly created collection

To generate the CRUD API for your new collection, simply run `php artisan scaffold:mongo-collection Vehicle`. Once you have run this command, a new controller will have been generated called <b>VehicleController</b> which extends the <b>MongoCRUDController</b>. The MongoCRUDController defines all the functions for performing CRUD operations. You can override the functions in the designated sub-class of the MongoCRUDController, which in this case would be the VehicleController. 

In addition, the Model for the Vehicle collection will also have been generated in the `/app` directory. Below is an example of what the generated model will look like. 

    <?php
    
    	namespace App;
    
    	use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
    
    	class Vehicle extends Eloquent
    	{
    	    protected $connection = 'mongodb';
    	    protected $collection = 'vehicles';
    	    protected $fillable = ['license_plate', 'make'];
    	}
     
Finally, the last bit of code which is generated are all the CRUD routes for the Vehicle collection in the `routes/web.php` file. Here's an example of what that would look like.

    <?php
	    
	    use Illuminate\Support\Facades\Route;
	    
	    // ==================== CRUD ROUTES FOR Vehicle ====================
	    Route::get('/vehicle', 'VehicleController@index');
	    Route::get('/vehicle/{id}', 'VehicleController@show');
	    Route::put('/vehicle/{id}', 'VehicleController@update');
	    Route::delete('/vehicle/{id}', 'VehicleController@destroy');
	    Route::post('/vehicle', 'VehicleController@store');
	    // ==================== END OF CRUD ROUTES FOR Vehicle ==============

You can test the routes immediately right after running the `php artisan scaffold:mongo-collection Vehicle` command.
