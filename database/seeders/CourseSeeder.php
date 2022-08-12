<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Description;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Lesson;
use App\Models\Requirement;
use App\Models\Section;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::create
        (
            [
                'title' =>   'Código de vestimenta',
                'subtitle'  =>  'Formailidad en cada situación de la empresa.',
                'description'  =>  '<p>El código de vestimenta es la manera apropiada de vestir para representar a <strong>TAKAB TECHNOLOGY</strong>.<br>Este código busca reflejar una imagen de formalidad y confianza ante los clientes, también busca proyectar<br>innovación, adaptación al cambio y ofrecer experiencias extraordinarias a nuestros clientes, en donde quiera<br>que estén y alcanzar nuestra visión: Ser líderes en la prestación de servicios integrales y suministros<br>tecnológicos.<br>A continuación, se presentan los códigos de vestimenta vigente y que aplican a tolas las personas que<br>colaboran en Takab Technology.<br>El Código de Vestimenta <i>Formal de Negocios aplica para todas las reuniones con clientes</i>, instituciones<br>externas, entidades regulatorias y/o proveedores, ya sea que estas reuniones se lleven a cabo en las<br>instalaciones de Takab Technology o fuera de ellas.<br>El Código de Vestimenta <i>Casual de Negocios aplica para todos los colaboradores</i> que trabajan en las<br>oficinas de Takab Technology: negocios, operación, tecnología, soporte y ejecutivos en todas las áreas de<br>negocios. Este código aplica dentro de la jornada laboral cualquier día de la semana, además del Código de<br>Vestimenta Formal de Negocios.<br>El Código de Vestimenta con <i>Uniforme aplica para los ejecutivos de ventas</i>, así como para las áreas de<br>servicio, recepción, seguridad, logística, choferes, etc.<br>El colaborador, áreas responsables y empresas deben observar el código de vestimenta apropiado.<br>El colaborador es responsable de aplicar el código de vestimenta acorde a las situaciones antes descritas,<br>pensando en que es un embajador de Takab Technology.<br>El código de vestimenta entra en vigor a partir de mayo de 2019.</p>',
                'status'  =>  '3',
                'slug'  =>  'c-digo-de-vestimenta',
                'user_id'  =>  '1',
                'category_id'  =>  '1',
            ]
        );


        $image = Image::create(
            [
                'url' =>   'courses/CVestimenta.jpg',
                'imageable_id'  =>  '1',
                'imageable_type'  =>  'App\Models\Course',
            ]);


        $requirement1 = Requirement::create(
            [
                'name' =>   'Camisa blanca',
                'course_id'  =>  '1',
            ]);
        $requirement2 = Requirement::create(
            [
                'name' =>   'Pantalon azul',
                'course_id'  =>  '1',
            ]);


        $goal1 = Goal::create(
            [
                'name' =>   'Formalidad',
                'course_id'  =>  '1',
            ]);
        $goal2 = Goal::create(
            [
                'name' =>   'Incrementar el conocimiento general',
                'course_id'  =>  '1',
            ]);


        $section1 = Section::create(
            [
                'name' =>   'Vestimenta Formal de Negocios',
                'course_id'  =>  '1',
            ]);
        $section2 = Section::create(
            [
                'name' =>   'Vestimenta Casual de Negocios',
                'course_id'  =>  '1',
            ]);
        $section3 = Section::create(
            [
                'name' =>   'Vestimenta con Uniforme',
                'course_id'  =>  '1',
            ]);


          


        $lesson = Lesson::create(
            [
                'name' =>   'Código de vestimenta del atuendo de negocios para hombres profesionales',
                'url'  =>  'https://youtu.be/zI-5RuUBCMI',
                'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/zI-5RuUBCMI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'platform_id' => '1',
                'section_id' => '1',
            ]);
        $lesson = Lesson::create(
            [
                'name' =>   'Blazer Casual Elegante Informal Para Negocios',
                'url'  =>  'https://youtu.be/Gp1F85STnsE',
                'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Gp1F85STnsE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'platform_id' => '1',
                'section_id' => '2',
            ]);
        $lesson = Lesson::create(
            [
                'name' =>   'Cómo Fajarse La Camisa | MANTEN Tu Camisa Fajada Todo El Día!',
                'url'  =>  'https://youtu.be/XOoSn2TJGLU',
                'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/XOoSn2TJGLU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'platform_id' => '1',
                'section_id' => '3',
            ]);


        // $courses = Course::factory(100)->create();

        // foreach ($courses as $course) {
        //     Image::factory(1)->create([
        //         'imageable_id' => $course->id,
        //         'imageable_type' => 'App\Models\Course'
        //     ]);

        //     Requirement::factory(4)->create([
        //         'course_id' => $course->id
        //     ]);

        //     Goal::factory(4)->create([
        //         'course_id' => $course->id
        //     ]);

        //     $sections = Section::factory(4)->create(['course_id' => $course->id]);

        //     foreach ($sections as $section) {
        //         $lessons = Lesson::factory(4)->create(['section_id' => $section->id]);

        //         foreach ($lessons as $lesson) {
        //             Description::factory(1)->create(['lesson_id' => $lesson->id]);
        //         }
        //     }
        // }
    }
}
