<template>
    <div class="post-preview">
            <a :href="slug">
              <h2 class="post-title">
               {{title}}
              </h2>
              <h3 class="post-subtitle">
                {{subtitle}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              {{created_at}}  </p>
              <div>
                <span>{{likeCount}}</span>  
                <a href="" class="like"  @click.prevent="likeIt"><strong>Like</strong></a>
               
              </div>
          </div>
</template>

<script>
    export default {
        data(){
          return {
                likeCount : 0
                }
        },
        props:[
          'title','subtitle','created_at','postId','logIn','likes','slug'
        ],

        created(){
          this.likeCount = this.likes;
        },
        methods:{
          likeIt(){

              if(this.logIn){

              axios.post('/savelike',{
                id : this.postId
              })
                .then(response => {

                if(response.data == 'delete'){
                  this.likeCount-=1;
                }else{

                  this.likeCount+=1;
                }
                  //this.blog = response.data.data
                  //console.log(response);
                })
                .catch(function (error) {
                  console.log(error);
                });
              }else{
              window.location = 'login'
              }
          }
        }
    }
</script>
