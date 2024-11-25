class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'responsable'];

    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class);
    }
} 