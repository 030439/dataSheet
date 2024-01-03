<style>
    // outdated

$skin: #4db6ac;

html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
body {
  font-family: 'Roboto', sans-serif;
  background: linear-gradient(to top, #4F6072, #8699AA);
  display: flex;
  justify-content: center;
  align-items: center;
}

//upload component
.upload {
  position: relative;
  width: 400px;
  min-height: 445px;
  box-sizing: border-box;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(black, .2);
  padding-bottom: 20px;
  background: #fff;
  animation: fadeup .5s .5s ease both;
  transform: translateY(20px);
  opacity: 0;
  .upload-files {
    header {
      background: $skin;
				  border-top-left-radius: 5px;
					 border-top-right-radius: 5px;
      text-align: center;
      p {
        color: #fff;
        font-size: 40px;
        margin: 0;
        padding: 50px 0;
        i {
          transform: translateY(20px);
          opacity: 0;
          font-size: 30px;
          animation: fadeup .5s 1s ease both;
        }
        .up {
          font-weight: bold;
          transform: translateX(-20px);
          display: inline-block;
          opacity: 0;
          animation: faderight .5s 1.5s ease both;
        }
        .load {
          display: inline-block;
          font-weight: 100;
          margin-left: -8px;
          transform: translateX(-20px);
          opacity: 0;
          animation: faderight 1s 1.5s ease both;
        }
      }
    }
    .body {
      text-align: center;
      padding: 50px 0;
      padding-bottom: 30px;
      &.hidden {
        display: none;
      }
      input {
        visibility: hidden;
      }
      i {
        font-size: 65px;
        color: lightgray;
      }
      p {
        font-size: 14px;
        padding-top: 15px;
        line-height: 1.4;
        b,
        a {
          color: $skin;
        }
      }
      &.active {
        border: dashed 2px $skin;
        i {
          box-shadow: 0 0 0 -3px #fff,
          0 0 0 lightgray,
          0 0 0 -3px #fff,
          0 0 0 lightgray;
          animation: file .5s ease both;
        }
        @keyframes file {
          50% {
            box-shadow: -8px 8px 0 -3px #fff,
            -8px 8px 0 lightgray,
            -8px 8px 0 -3px #fff,
            -8px 8px 0 lightgray;
          }
          75%,
          100% {
            box-shadow: -8px 8px 0 -3px #fff,
            -8px 8px 0 lightgray,
            -16px 16px 0 -3px #fff,
            -16px 16px 0 lightgray;
          }
        }
        .pointer-none{
          pointer-events: none;
        }
      }
    }
    footer {
      width: 100%;
      margin: 0 auto;
      height: 0;
      .divider {
        margin: 0 auto;
        width: 0;
        border-top: solid 4px darken($skin, 3.5%);
        text-align: center;
        overflow: hidden;
        transition: width .5s ease;
        span {
          display: inline-block;
          transform: translateY(-25px);
          font-size: 12px;
          padding-top: 8px;
        }
      }
      &.hasFiles {
        height: auto;
        .divider {
          width: 100%;
          span {
            transform: translateY(0);
            transition: transform .5s .5s ease;
          }
        }
      }
      .list-files {
        width: 320px;
        margin: 0 auto;
        margin-top: 15px;
        padding-left: 5px;
        text-align: center;
        overflow-x: hidden;
        overflow-y: auto;
        max-height: 210px;
        &::-webkit-scrollbar-track {
            background-color: rgba(lightgray, .25);
        }
        &::-webkit-scrollbar {
            width: 4px;
            background-color: rgba(lightgray, .25);
        }
        &::-webkit-scrollbar-thumb {
            background-color: rgba($skin, .5);
        }
        .file {
          width: 300px;
          min-height: 50px;
          display: flex;
          justify-content: space-between;
          align-items: center;
          opacity: 0;
          animation: fade .35s ease both;
          .name {
            font-size: 12px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            width: 80px;
            text-align: left;
          }
          .progress {
            width: 175px;
            height: 5px;
            border: solid 1px lightgray;
            border-radius: 2px;
            background: linear-gradient(to left, rgba($skin, .2), rgba($skin, .8)) no-repeat;
            background-size: 100% 100%;
            &.active {
              animation: progress 30s linear;
            }
          }

          @keyframes progress {
            from {
              background-size: 0 100%;
            }
            to {
              background-size: 100% 100%;
            }
          }

          .done {
            cursor: pointer;
            width: 40px;
            height: 40px;
            background: $skin;
            border-radius: 50%;
            margin-left: -10px;
            transform: scale(0);
            position: relative;
            &:before {
              content: "View";
              position: absolute;
              top: 0;
              left: -5px;
              font-size: 24px;
              opacity: 0;
            }
            &:hover:before {
              transition: all .25s ease;
              top: -30px;
              opacity: 1;
            }
            &.anim {
              animation: done1 .5s ease forwards;
              #path {
                animation: done2 2.5s .5s ease forwards;
              }
            }
            #path {
              stroke-dashoffset: 7387.59423828125;
              stroke-dasharray: 7387.59423828125 7387.59423828125;
              stroke: #fff;
              fill: transparent;
              stroke-width: 50px;
            }
          }
          @keyframes done2 {
            to {
              stroke-dashoffset: 0;
            }
          }
          @keyframes done1 {
            50% {
              transform: scale(.5);
              opacity: 1;
            }
            80% {
              transform: scale(.25);
              opacity: 1;
            }
            100% {
              transform: scale(.5);
              opacity: 1;
            }
          }
        }
      }
      .importar {
							 width: 125px;
        outline: none;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 20px;
        margin: auto;
        border: solid 1px $skin;
        color: $skin;
        background: transparent;
        padding: 8px 15px;
        font-size: 12px;
        border-radius: 4px;
        font-family: Roboto;
        line-height: 1;
        cursor: pointer;
        transform: translateY(15px);
        opacity: 0;
							 visibility: hidden;
        //margin-left: calc(50% - 40px);
        &.active {
          transition: transform .5s 1.5s ease, opacity .5s 1.5s ease, background;
          transform: translateY(0);
          opacity: 1;
									 visibility: visible;
        }
        &:hover{
          background: $skin;
          color: #fff;
        }
      }
    }
  }
  @keyframes fadeup {
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }
  @keyframes faderight {
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }
  @keyframes fade {
    to {
      opacity: 1;
    }
  }
  @media (max-width: 400px){
    width: 100%;
    height: 100%;
  }
}

</style>
<div class="upload">
 <div class="upload-files">
  <header>
   <p>
    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
    <span class="up">up</span>
    <span class="load">load</span>
   </p>
  </header>
  <div class="body" id="drop">
   <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
   <p class="pointer-none"><b>Drag and drop</b> files here <br /> or <a href="" id="triggerFile">browse</a> to begin the upload</p>
			<input type="file" multiple="multiple" />
  </div>
  <footer>
   <div class="divider">
    <span><AR>FILES</AR></span>
   </div>
   <div class="list-files">
    <!--   template   -->
   </div>
			<button class="importar">UPDATE FILES</button>
  </footer>
 </div>
</div>
<script><