@csrf
@include('dashboard.partials.validation-error')
<form>
    <div class="form-group">
        <h4>Pregunta 1</h4>
        <label for="respuesta1">(Verdadero o Falso). El principio de responsabilidad única trata de que si cada clase tiene una única responsabilidad, 
          esta será más fácil de mantener. Si un módulo agrupa funcionalidades muy dispersas,
           su cohesión es baja, si un módulo tiene una única funcionalidad, su cohesión es alta.
        </label>
        <input type="text" class="form-control mb-3" name ="respuesta1" id="respuesta1">
      
        <div class="form-group">
            <h4>Pregunta 2</h4>
            <label for="respuesta2">
                Queremos diseñar un sistema siguiendo el Dependency Inversion Principle. El módulo principal es HealthService, 
                que recomienda a usuarios hábitos saludables en función de sus características.
                 Este módulo necesita autenticar usuarios y por eso usa los servicios de un módulo de bajo nivel: AuthenticationService.
                  Actualmente el código de HealthService tiene referencias directas a AuthenticationService.
                  ¿Qué cambio deberíamos hacer para cumplir con el Dependency Inversion Principle?
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta2" id="respuesta2">
        </div>

        <div class="form-group">
            <h4>Pregunta 3</h4>
            <label for="respuesta3">
                Según el principio sw Dependency Inversion Principle, 
                los módulos de alto nivel no deben depender de los módulos de bajo nivel, ambos deben depender de abstracciones, 
                las cuales no deben depender de los detalles, son estos los que dependen de las abstracciones.
                 Normalmente esto aplica en una arquitectura de 3 capas. La imagen que mejor representa esta afirmación es:
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta3" id="respuesta3">
        </div>

        <div class="form-group">
            <h4>Pregunta 4</h4>
            <label for="respuesta4">
                Qué principio se estaría violando en el siguiente diagrama de clases, 
                si llega un nuevo cliente que desea enviar mensajes sin encriptarlos. 
                Recuerda el principio que menciona que los clientes NO DEBEN estar forzados a depender de métodos que 
                ellos no utilizan:
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta4"  id="respuesta4">
        </div>

        <div class="form-group">
            <h4>Pregunta 5</h4>
            <label for="respuesta5">
                Hemos implementado una clase MailSender que envía correos de distintos tipos, representados como subclases de una interface genérica Mail. 
                Cada vez que se introduce tipo de Mail nuevo modificamos la clase MailSender para adaptar el envío a este nuevo tipo de email.
                ¿Qué principio SOLID estamos violando?
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta5" id="respuesta5">
        </div>

        <div class="form-group">
            <h4>Pregunta 6</h4>
            <label for="respuesta6">
                El Dependency Inversion Principle recomienda que los módulos de alto nivel no dependan de los de bajo nivel.
                ¿Qué estrategia usa para conseguirlo?
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta6"  id="respuesta6">
        </div>

        <div class="form-group">
            <h4>Pregunta 7</h4>
            <label for="respuesta7">
                Verdadero o falso. Nuestras entidades, bien sean, clases, módulos, funciones, 
                deben ser abiertas para la modificación y cerradas para la extensión. 
                Siendo un sistema modificable, sin extender el código existente, evitando errores.
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta7" id="respuesta7">
        </div>

        <div class="form-group">
            <h4>Pregunta 8</h4>
            <label for="respuesta8">
                Determina el caso de violación a que principio pertenece: 
                En un mismo método mezclamos lógica del negocio, con lógica de presentación.
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta8" id="respuesta8">
        </div>

        <div class="form-group">
            <h4>Pregunta 9</h4>
            <label for="respuesta9">
                Si S es un subtipo de T que queremos introducir de forma segura en el programa. 
                ¿Qué requiere el principio de Liskov que cumpla S?
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta9" id="respuesta9">
        </div>

        <div class="form-group">
            <h4>Pregunta 10</h4>
            <label for="respuesta10">
                ¿Qué método no debería formar parte de la clase Cesta según el Single Responsibility Principle?
            </label>
            <input type="text" class="form-control mb-3" name ="respuesta10"  id="respuesta10">
        </div>



    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>