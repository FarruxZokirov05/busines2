@extends('layouts.app')

@section('content')
   <x-sidebar/>
   <div class="home_content ">
       <div class="container mx-auto">
            <div class="idea_head_user">
                <div class="content-idea-user">
                    <h1>G'oyalar</h1>
                    <div class="add_vacancy">
                        <a id="idea_add_btn" class="add-vac">G'oya qo'shish <i class='bx bxs-plus-square'></i></a>
                    </div>
                </div>
               

            
            <table class="vacancy_table">
                <tr>
                    <th>№</th>
                    <th>G’oya mazmuni</th>
                    <th>G’oya haqida umumiy ma’lumot</th>
                    <th>O’zgartirish</th>
                    <th>O’chrish</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Dasturchi kerak</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                    <td><a href="#"><i class='bx bx-edit' ></i></a></td>
                    <td><a href=""><i class='bx bx-trash' ></i></a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Dasturchi kerak</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                    <td><a href="#"><i class='bx bx-edit' ></i></a></td>
                    <td><a href=""><i class='bx bx-trash' ></i></a></td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Dasturchi kerak</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                    <td><a href="#"><i class='bx bx-edit' ></i></a></td>
                    <td><a href=""><i class='bx bx-trash' ></i></a></td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Dasturchi kerak</td>
                    <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                    <td><a href="#"><i class='bx bx-edit' ></i></a></td>
                    <td><a href=""><i class='bx bx-trash' ></i></a></td>
                </tr>

            </table>
            </div>

       </div>
       <div id="idea_modal" class="modal_vacancy">

            <!-- Modal content -->
            <div class="modal-content-vacancy">
                <span class="close_btn_idea">&times;</span>
                <form class="form_modal" action="">
                    <label for="text">G’oya sarlavhasi <span>*</span></label>
                    <input type="text" placeholder="sarlavha matni">
                    <label for="textarea">G’oya haqida ma’lumot <span>*</span></label>
                    <textarea name="textarea" id="" placeholder="Vakansiya haqida umumiy malumot"></textarea>
                    <div style="display:flex; justify-content: center;">
                        <input type="submit" value="Qo’shish">
                    </div>
                    
                </form>
            </div>

        </div>  
                  
  </div>

  <!-- Idea qo'shish mdal js -->
  <script>
      var modal_id = document.getElementById("idea_modal");

        var btn_id = document.getElementById("idea_add_btn");

        var span_id = document.getElementsByClassName("close_btn_idea")[0];

        btn_id.onclick = function() {
        modal_id.style.display = "block";
        }

        span_id.onclick = function() {
        modal_id.style.display = "none";
        }

        window.onclick = function(event) {
        if (event.target == modal_id) {
            modal_id.style.display = "none";
        }
        }

  </script>
@endsection