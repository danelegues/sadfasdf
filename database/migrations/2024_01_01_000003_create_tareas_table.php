use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trabajador_id')->constrained()->onDelete('cascade');
            $table->text('descripcion');
            $table->date('fecha_limite');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tareas');
    }
} 