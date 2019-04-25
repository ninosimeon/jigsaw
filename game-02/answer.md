# Juego 02

## Teoría
CircuitBreaker

![CircuitBreaker Pattern](https://martinfowler.com/bliki/images/circuitBreaker/sketch.png)

Microservices Architecture. Variación de SOA desacoplandolo en pequeños proyectos dentro de los cuales estos son altamente testeables, mantenibles, desacoplados, desplegable de manera independiente, organizado.

![Microservices](https://cdn-images-1.medium.com/max/800/1*phGEJmeQ1j4M_a_U1d2OvA.png)

## Aplicación
Se cuenta con múltiples servicios operando en el proyecto XYZ, cada uno con propósitos específicos sin embargo existe uno que se encarga de trabajar con externos, este servicio es llamado YOLO.

Considerando que las peticiones son SÍNCRONAS se tiene que implementar el "Object Pool Design Pattern", permitirá limitar el máximo de peticiones, entre otras características espeficiadas en el reto.

```
REFERENCIAS:

- https://martinfowler.com/bliki/CircuitBreaker.html
- https://medium.com/containermind/rethinking-service-integrations-with-microservices-architecture-5cbb844f5f51
- https://microservices.io/
```  