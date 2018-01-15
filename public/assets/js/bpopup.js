"use strict";!function(o){o.fn.bPopup=function(t,e){function n(){h.modal&&o('<div class="b-modal '+b+'"></div>').css({backgroundColor:h.modalColor,position:"fixed",top:0,right:0,bottom:0,left:0,opacity:0,zIndex:h.zIndex+W}).appendTo(h.appendTo).fadeTo(h.speed,h.opacity),p(),U.data("bPopup",h).data("id",b).css({left:"slideIn"==h.transition||"slideBack"==h.transition?"slideBack"==h.transition?I.scrollLeft()+B:-1*(T+x):c(!(!h.follow[0]&&g||C)),position:h.positionStyle||"absolute",top:"slideDown"==h.transition||"slideUp"==h.transition?"slideUp"==h.transition?I.scrollTop()+z:k+-1*y:r(!(!h.follow[1]&&m||C)),"z-index":h.zIndex+W+1}).each(function(){h.appending&&o(this).appendTo(h.appendTo)}),s(!0)}function i(){return h.modal&&o(".b-modal."+U.data("id")).fadeTo(h.speed,0,function(){o(this).remove()}),h.scrollBar||o("html").css("overflow","auto"),o(".b-modal."+b).unbind("click"),I.unbind("keydown."+b),S.unbind("."+b).data("bPopup",0<S.data("bPopup")-1?S.data("bPopup")-1:null),U.undelegate(".bClose, ."+h.closeClass,"click."+b,i).data("bPopup",null),clearTimeout(P),s(),!1}function a(t){z=S.height(),B=S.width(),((w=f()).x||w.y)&&(clearTimeout(v),v=setTimeout(function(){p(),t=t||h.followSpeed;var e={};w.x&&(e.left=h.follow[0]?c(!0):"auto"),w.y&&(e.top=h.follow[1]?r(!0):"auto"),U.dequeue().each(function(){C?o(this).css({left:T,top:k}):o(this).animate(e,t,h.followEasing)})},50))}function l(o){var t=o.width(),e=o.height(),n={};h.contentContainer.css({height:e,width:t}),e>=U.height()&&(n.height=U.height()),t>=U.width()&&(n.width=U.width()),y=U.outerHeight(!0),x=U.outerWidth(!0),p(),h.contentContainer.css({height:"auto",width:"auto"}),n.left=c(!(!h.follow[0]&&g||C)),n.top=r(!(!h.follow[1]&&m||C)),U.animate(n,250,function(){o.show(),w=f()})}function s(o){function t(t){U.css({display:"block",opacity:1}).animate(t,h.speed,h.easing,function(){d(o)})}switch(o?h.transition:h.transitionClose||h.transition){case"slideIn":t({left:o?c(!(!h.follow[0]&&g||C)):I.scrollLeft()-(x||U.outerWidth(!0))-200});break;case"slideBack":t({left:o?c(!(!h.follow[0]&&g||C)):I.scrollLeft()+B+200});break;case"slideDown":t({top:o?r(!(!h.follow[1]&&m||C)):I.scrollTop()-(y||U.outerHeight(!0))-200});break;case"slideUp":t({top:o?r(!(!h.follow[1]&&m||C)):I.scrollTop()+z+200});break;default:U.stop().fadeTo(h.speed,o?1:0,function(){d(o)})}}function d(t){t?(S.data("bPopup",W),U.delegate(".bClose, ."+h.closeClass,"click."+b,i),h.modalClose&&o(".b-modal."+b).css("cursor","pointer").bind("click",i),H||!h.follow[0]&&!h.follow[1]||S.bind("scroll."+b,function(){if(w.x||w.y){var o={};w.x&&(o.left=h.follow[0]?c(!C):"auto"),w.y&&(o.top=h.follow[1]?r(!C):"auto"),U.dequeue().animate(o,h.followSpeed,h.followEasing)}}).bind("resize."+b,function(){a()}),h.escClose&&I.bind("keydown."+b,function(o){27==o.which&&i()}),u(e),h.autoClose&&(P=setTimeout(i,h.autoClose))):(U.hide(),u(h.onClose),h.loadUrl&&(h.contentContainer.empty(),U.css({height:"auto",width:"auto"})))}function c(o){return o?T+I.scrollLeft():T}function r(o){return o?k+I.scrollTop():k}function u(t,e){o.isFunction(t)&&t.call(U,e)}function p(){k=m?h.position[1]:Math.max(0,(z-U.outerHeight(!0))/2-h.amsl),T=g?h.position[0]:(B-U.outerWidth(!0))/2,w=f()}function f(){return{x:B>U.outerWidth(!0),y:z>U.outerHeight(!0)}}o.isFunction(t)&&(e=t,t=null);var h=o.extend({},o.fn.bPopup.defaults,t);h.scrollBar||o("html").css("overflow","hidden");var b,w,m,g,C,k,T,y,x,v,P,U=this,I=o(document),S=o(window),z=S.height(),B=S.width(),H=/OS 6(_\d)+/i.test(navigator.userAgent),W=0;return U.close=function(){i()},U.reposition=function(o){a(o)},U.each(function(){o(this).data("bPopup")||(u(h.onOpen),W=(S.data("bPopup")||0)+1,b="__b-popup"+W+"__",m="auto"!==h.position[1],g="auto"!==h.position[0],C="fixed"===h.positionStyle,y=U.outerHeight(!0),x=U.outerWidth(!0),h.loadUrl?function(){switch(h.contentContainer=o(h.contentContainer||U),h.content){case"iframe":var t=o('<iframe class="b-iframe" '+h.iframeAttr+"></iframe>");t.appendTo(h.contentContainer),y=U.outerHeight(!0),x=U.outerWidth(!0),n(),t.attr("src",h.loadUrl),u(h.loadCallback);break;case"image":n(),o("<img />").load(function(){u(h.loadCallback),l(o(this))}).attr("src",h.loadUrl).hide().appendTo(h.contentContainer);break;default:n(),o('<div class="b-ajax-wrapper"></div>').load(h.loadUrl,h.loadData,function(t,e,n){u(h.loadCallback,e),l(o(this))}).hide().appendTo(h.contentContainer)}}():n())})},o.fn.bPopup.defaults={amsl:50,appending:!0,appendTo:"body",autoClose:!1,closeClass:"b-close",content:"ajax",contentContainer:!1,easing:"swing",escClose:!0,follow:[!0,!0],followEasing:"swing",followSpeed:500,iframeAttr:'scrolling="no" frameborder="0"',loadCallback:!1,loadData:!1,loadUrl:!1,modal:!0,modalClose:!0,modalColor:"#000",onClose:!1,onOpen:!1,opacity:.7,position:["auto","auto"],positionStyle:"absolute",scrollBar:!0,speed:250,transition:"fadeIn",transitionClose:!1,zIndex:9997}}(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImJwb3B1cC5qcyJdLCJuYW1lcyI6WyJjIiwiZm4iLCJiUG9wdXAiLCJBIiwiRSIsIkIiLCJhIiwibW9kYWwiLCJlIiwiY3NzIiwiYmFja2dyb3VuZENvbG9yIiwibW9kYWxDb2xvciIsInBvc2l0aW9uIiwidG9wIiwicmlnaHQiLCJib3R0b20iLCJsZWZ0Iiwib3BhY2l0eSIsInpJbmRleCIsInYiLCJhcHBlbmRUbyIsImZhZGVUbyIsInNwZWVkIiwiQyIsImIiLCJkYXRhIiwidHJhbnNpdGlvbiIsImYiLCJzY3JvbGxMZWZ0IiwidyIsIngiLCJ1IiwibSIsImZvbGxvdyIsIm4iLCJnIiwicG9zaXRpb25TdHlsZSIsInNjcm9sbFRvcCIsInkiLCJ6IiwidCIsInAiLCJxIiwiei1pbmRleCIsImVhY2giLCJhcHBlbmRpbmciLCJ0aGlzIiwiRyIsInIiLCJyZW1vdmUiLCJzY3JvbGxCYXIiLCJ1bmJpbmQiLCJrIiwidW5kZWxlZ2F0ZSIsImNsb3NlQ2xhc3MiLCJjbGVhclRpbWVvdXQiLCJIIiwiSSIsImQiLCJoZWlnaHQiLCJ3aWR0aCIsImgiLCJEIiwiSiIsInNldFRpbWVvdXQiLCJmb2xsb3dTcGVlZCIsImRlcXVldWUiLCJhbmltYXRlIiwiZm9sbG93RWFzaW5nIiwiRiIsImNvbnRlbnRDb250YWluZXIiLCJvdXRlckhlaWdodCIsIm91dGVyV2lkdGgiLCJzaG93IiwiZGlzcGxheSIsImVhc2luZyIsIksiLCJ0cmFuc2l0aW9uQ2xvc2UiLCJzdG9wIiwiZGVsZWdhdGUiLCJtb2RhbENsb3NlIiwiYmluZCIsIk4iLCJlc2NDbG9zZSIsIndoaWNoIiwibCIsImF1dG9DbG9zZSIsImhpZGUiLCJvbkNsb3NlIiwibG9hZFVybCIsImVtcHR5IiwiaXNGdW5jdGlvbiIsImNhbGwiLCJNYXRoIiwibWF4IiwiYW1zbCIsImV4dGVuZCIsImRlZmF1bHRzIiwiZG9jdW1lbnQiLCJ3aW5kb3ciLCJ0ZXN0IiwibmF2aWdhdG9yIiwidXNlckFnZW50IiwiY2xvc2UiLCJyZXBvc2l0aW9uIiwib25PcGVuIiwiY29udGVudCIsImlmcmFtZUF0dHIiLCJhdHRyIiwibG9hZENhbGxiYWNrIiwibG9hZCIsImxvYWREYXRhIiwiTCIsImpRdWVyeSJdLCJtYXBwaW5ncyI6ImNBQUEsU0FBVUEsR0FBR0EsRUFBRUMsR0FBR0MsT0FBTyxTQUFTQyxFQUFFQyxHQUFza0IsU0FBU0MsSUFBSUMsRUFBRUMsT0FBT1AsRUFBRSx1QkFBdUJRLEVBQUUsWUFBWUMsS0FBS0MsZ0JBQWdCSixFQUFFSyxXQUFXQyxTQUFTLFFBQVFDLElBQUksRUFBRUMsTUFBTSxFQUFFQyxPQUFPLEVBQUVDLEtBQUssRUFBRUMsUUFBUSxFQUFFQyxPQUFPWixFQUFFWSxPQUFPQyxJQUFJQyxTQUFTZCxFQUFFYyxVQUFVQyxPQUFPZixFQUFFZ0IsTUFBTWhCLEVBQUVXLFNBQVNNLElBQUlDLEVBQUVDLEtBQUssU0FBU25CLEdBQUdtQixLQUFLLEtBQUtqQixHQUFHQyxLQUFLTyxLQUFLLFdBQVdWLEVBQUVvQixZQUFZLGFBQWFwQixFQUFFb0IsV0FBVyxhQUFhcEIsRUFBRW9CLFdBQVdDLEVBQUVDLGFBQWFDLEdBQUcsR0FBR0MsRUFBRUMsR0FBR0MsS0FBSzFCLEVBQUUyQixPQUFPLElBQUlDLEdBQUdDLElBQUl2QixTQUFTTixFQUFFOEIsZUFBZSxXQUFXdkIsSUFBSSxhQUFhUCxFQUFFb0IsWUFBWSxXQUFXcEIsRUFBRW9CLFdBQVcsV0FBV3BCLEVBQUVvQixXQUFXQyxFQUFFVSxZQUFZQyxFQUFFQyxHQUFHLEVBQUVDLEVBQUVDLEtBQUtuQyxFQUFFMkIsT0FBTyxJQUFJUyxHQUFHUCxJQUFJUSxVQUFVckMsRUFBRVksT0FBT0MsRUFBRSxJQUFJeUIsS0FBSyxXQUFXdEMsRUFBRXVDLFdBQVc3QyxFQUFFOEMsTUFBTTFCLFNBQVNkLEVBQUVjLFlBQVkyQixHQUFFLEdBQUksU0FBU0MsSUFBdVcsT0FBblcxQyxFQUFFQyxPQUFPUCxFQUFFLFlBQVl3QixFQUFFQyxLQUFLLE9BQU9KLE9BQU9mLEVBQUVnQixNQUFNLEVBQUUsV0FBV3RCLEVBQUU4QyxNQUFNRyxXQUFXM0MsRUFBRTRDLFdBQVdsRCxFQUFFLFFBQVFTLElBQUksV0FBVyxRQUFRVCxFQUFFLFlBQVlRLEdBQUcyQyxPQUFPLFNBQVN4QixFQUFFd0IsT0FBTyxXQUFXM0MsR0FBRzRDLEVBQUVELE9BQU8sSUFBSTNDLEdBQUdpQixLQUFLLFNBQVMsRUFBRTJCLEVBQUUzQixLQUFLLFVBQVUsRUFBRTJCLEVBQUUzQixLQUFLLFVBQVUsRUFBRSxNQUFNRCxFQUFFNkIsV0FBVyxhQUFhL0MsRUFBRWdELFdBQVcsU0FBUzlDLEVBQUV3QyxHQUFHdkIsS0FBSyxTQUFTLE1BQU04QixhQUFhQyxHQUFHVCxLQUFVLEVBQUcsU0FBU1UsRUFBRUMsR0FBR3BCLEVBQUVjLEVBQUVPLFNBQVM5QixFQUFFdUIsRUFBRVEsVUFBUUMsRUFBRUMsS0FBU2hDLEdBQUcrQixFQUFFdkIsS0FBRWlCLGFBQWFRLEdBQUdBLEVBQUVDLFdBQVcsV0FBV3pDLElBQUltQyxFQUFFQSxHQUFHcEQsRUFBRTJELFlBQVksSUFBSXpELEtBQUtxRCxFQUFFL0IsSUFBSXRCLEVBQUVRLEtBQUtWLEVBQUUyQixPQUFPLEdBQUdELEdBQUUsR0FBSSxRQUFRNkIsRUFBRXZCLElBQUk5QixFQUFFSyxJQUFJUCxFQUFFMkIsT0FBTyxHQUFHUSxHQUFFLEdBQUksUUFBUWpCLEVBQUUwQyxVQUFVdEIsS0FBSyxXQUFXVCxFQUFFbkMsRUFBRThDLE1BQU1yQyxLQUFLTyxLQUFLYyxFQUFFakIsSUFBSTBCLElBQUl2QyxFQUFFOEMsTUFBTXFCLFFBQVEzRCxFQUFFa0QsRUFBRXBELEVBQUU4RCxpQkFBaUIsS0FBSSxTQUFTQyxFQUFFWCxHQUFHLElBQUkxRCxFQUFFMEQsRUFBRUUsUUFBUXBELEVBQUVrRCxFQUFFQyxTQUFTaEMsS0FBS3JCLEVBQUVnRSxpQkFBaUI3RCxLQUFLa0QsT0FBT25ELEVBQUVvRCxNQUFNNUQsSUFBSVEsR0FBR2dCLEVBQUVtQyxXQUFXaEMsRUFBRWdDLE9BQU9uQyxFQUFFbUMsVUFBVTNELEdBQUd3QixFQUFFb0MsVUFBVWpDLEVBQUVpQyxNQUFNcEMsRUFBRW9DLFNBQVNwQixFQUFFaEIsRUFBRStDLGFBQVksR0FBSXhDLEVBQUVQLEVBQUVnRCxZQUFXLEdBQUlqRCxJQUFJakIsRUFBRWdFLGlCQUFpQjdELEtBQUtrRCxPQUFPLE9BQU9DLE1BQU0sU0FBU2pDLEVBQUVYLEtBQUtnQixLQUFLMUIsRUFBRTJCLE9BQU8sSUFBSUMsR0FBR0MsSUFBSVIsRUFBRWQsSUFBSTRCLEtBQUtuQyxFQUFFMkIsT0FBTyxJQUFJUyxHQUFHUCxJQUFJWCxFQUFFMkMsUUFBUXhDLEVBQUUsSUFBSSxXQUFXK0IsRUFBRWUsT0FBT1osRUFBRUMsTUFBd2QsU0FBU2YsRUFBRVcsR0FBRyxTQUFTMUQsRUFBRVEsR0FBR2dCLEVBQUVmLEtBQUtpRSxRQUFRLFFBQVF6RCxRQUFRLElBQUlrRCxRQUFRM0QsRUFBRUYsRUFBRWdCLE1BQU1oQixFQUFFcUUsT0FBTyxXQUFXQyxFQUFFbEIsS0FBSyxPQUFPQSxFQUFFcEQsRUFBRW9CLFdBQVdwQixFQUFFdUUsaUJBQWlCdkUsRUFBRW9CLFlBQVksSUFBSyxVQUFVMUIsR0FBR2dCLEtBQUswQyxFQUFFMUIsS0FBSzFCLEVBQUUyQixPQUFPLElBQUlDLEdBQUdDLElBQUlSLEVBQUVDLGNBQWNHLEdBQUdQLEVBQUVnRCxZQUFXLElBQUssTUFBTSxNQUFNLElBQUssWUFBWXhFLEdBQUdnQixLQUFLMEMsRUFBRTFCLEtBQUsxQixFQUFFMkIsT0FBTyxJQUFJQyxHQUFHQyxJQUFJUixFQUFFQyxhQUFhQyxFQUFFLE1BQU0sTUFBTSxJQUFLLFlBQVk3QixHQUFHYSxJQUFJNkMsRUFBRWpCLEtBQUtuQyxFQUFFMkIsT0FBTyxJQUFJUyxHQUFHUCxJQUFJUixFQUFFVSxhQUFhRyxHQUFHaEIsRUFBRStDLGFBQVksSUFBSyxNQUFNLE1BQU0sSUFBSyxVQUFVdkUsR0FBR2EsSUFBSTZDLEVBQUVqQixLQUFLbkMsRUFBRTJCLE9BQU8sSUFBSVMsR0FBR1AsSUFBSVIsRUFBRVUsWUFBWUMsRUFBRSxNQUFNLE1BQU0sUUFBUWQsRUFBRXNELE9BQU96RCxPQUFPZixFQUFFZ0IsTUFBTW9DLEVBQUUsRUFBRSxFQUFFLFdBQVdrQixFQUFFbEIsTUFBTSxTQUFTa0IsRUFBRWxCLEdBQUdBLEdBQXBoQ04sRUFBRTNCLEtBQUssU0FBU04sR0FBR0ssRUFBRXVELFNBQVMsYUFBYXpFLEVBQUVnRCxXQUFXLFNBQVM5QyxFQUFFd0MsR0FBRzFDLEVBQUUwRSxZQUFZaEYsRUFBRSxZQUFZUSxHQUFHQyxJQUFJLFNBQVMsV0FBV3dFLEtBQUssUUFBUWpDLEdBQUdrQyxJQUFJNUUsRUFBRTJCLE9BQU8sS0FBSzNCLEVBQUUyQixPQUFPLElBQUltQixFQUFFNkIsS0FBSyxVQUFVekUsRUFBRSxXQUFXLEdBQUdxRCxFQUFFL0IsR0FBRytCLEVBQUV2QixFQUFFLENBQUMsSUFBSW9CLEtBQUtHLEVBQUUvQixJQUFJNEIsRUFBRTFDLEtBQUtWLEVBQUUyQixPQUFPLEdBQUdELEdBQUdHLEdBQUcsUUFBUTBCLEVBQUV2QixJQUFJb0IsRUFBRTdDLElBQUlQLEVBQUUyQixPQUFPLEdBQUdRLEdBQUdOLEdBQUcsUUFBUVgsRUFBRTBDLFVBQVVDLFFBQVFULEVBQUVwRCxFQUFFMkQsWUFBWTNELEVBQUU4RCxpQkFBaUJhLEtBQUssVUFBVXpFLEVBQUUsV0FBV2lELE1BQU1uRCxFQUFFNkUsVUFBVXhELEVBQUVzRCxLQUFLLFdBQVd6RSxFQUFFLFNBQVNGLEdBQUcsSUFBSUEsRUFBRThFLE9BQU9wQyxNQUE0bEJxQyxFQUFFakYsR0FBR0UsRUFBRWdGLFlBQVk5QixFQUFFUSxXQUFXaEIsRUFBRTFDLEVBQUVnRixjQUFjOUQsRUFBRStELE9BQU9GLEVBQUUvRSxFQUFFa0YsU0FBU2xGLEVBQUVtRixVQUFVbkYsRUFBRWdFLGlCQUFpQm9CLFFBQVFsRSxFQUFFZixLQUFLa0QsT0FBTyxPQUFPQyxNQUFNLFdBQVcsU0FBUzVCLEVBQUUxQixHQUFHLE9BQU9BLEVBQUV3QixFQUFFSCxFQUFFQyxhQUFhRSxFQUFFLFNBQVNXLEVBQUVuQyxHQUFHLE9BQU9BLEVBQUVpQyxFQUFFWixFQUFFVSxZQUFZRSxFQUFFLFNBQVM4QyxFQUFFL0UsRUFBRUUsR0FBR1IsRUFBRTJGLFdBQVdyRixJQUFJQSxFQUFFc0YsS0FBS3BFLEVBQUVoQixHQUFHLFNBQVNlLElBQUlnQixFQUFFRyxFQUFFcEMsRUFBRU0sU0FBUyxHQUFHaUYsS0FBS0MsSUFBSSxHQUFHeEQsRUFBRWQsRUFBRStDLGFBQVksSUFBSyxFQUFFakUsRUFBRXlGLE1BQU1qRSxFQUFFSSxFQUFFNUIsRUFBRU0sU0FBUyxJQUFJaUIsRUFBRUwsRUFBRWdELFlBQVcsSUFBSyxFQUFFWCxFQUFFQyxJQUFJLFNBQVNBLElBQUksT0FBT2hDLEVBQUVELEVBQUVMLEVBQUVnRCxZQUFXLEdBQUlsQyxFQUFFQSxFQUFFZCxFQUFFK0MsYUFBWSxJQUFLdkUsRUFBRTJGLFdBQVd4RixLQUFLQyxFQUFFRCxFQUFFQSxFQUFFLE1BQU0sSUFBSUcsRUFBRU4sRUFBRWdHLFVBQVVoRyxFQUFFQyxHQUFHQyxPQUFPK0YsU0FBUzlGLEdBQUdHLEVBQUU0QyxXQUFXbEQsRUFBRSxRQUFRUyxJQUFJLFdBQVcsVUFBVSxJQUE0R0QsRUFBRXFELEVBQUVuQixFQUFFUixFQUFFQyxFQUFFSSxFQUFFVCxFQUFFVSxFQUFFVCxFQUFFZ0MsRUFBRVAsRUFBNUhoQyxFQUFFc0IsS0FBS25CLEVBQUUzQixFQUFFa0csVUFBVTlDLEVBQUVwRCxFQUFFbUcsUUFBUTdELEVBQUVjLEVBQUVPLFNBQVM5QixFQUFFdUIsRUFBRVEsUUFBUXNCLEVBQUUsY0FBY2tCLEtBQUtDLFVBQVVDLFdBQVduRixFQUFFLEVBQStFLE9BQXZESyxFQUFFK0UsTUFBTSxXQUFXdkQsS0FBS3hCLEVBQUVnRixXQUFXLFNBQVNsRyxHQUFHbUQsRUFBRW5ELElBQVdrQixFQUFFb0IsS0FBSyxXQUFXNUMsRUFBRThDLE1BQU1yQixLQUFLLFlBQVk0RCxFQUFFL0UsRUFBRW1HLFFBQVF0RixHQUFHaUMsRUFBRTNCLEtBQUssV0FBVyxHQUFHLEVBQUVqQixFQUFFLFlBQVlXLEVBQUUsS0FBS3VCLEVBQUUsU0FBU3BDLEVBQUVNLFNBQVMsR0FBR3NCLEVBQUUsU0FBUzVCLEVBQUVNLFNBQVMsR0FBR3VCLEVBQUUsVUFBVTdCLEVBQUU4QixjQUFjSSxFQUFFaEIsRUFBRStDLGFBQVksR0FBSXhDLEVBQUVQLEVBQUVnRCxZQUFXLEdBQUlsRSxFQUFFbUYsUUFBL3VJLFdBQXlELE9BQTVDbkYsRUFBRWdFLGlCQUFpQnRFLEVBQUVNLEVBQUVnRSxrQkFBa0I5QyxHQUFVbEIsRUFBRW9HLFNBQVMsSUFBSyxTQUFTLElBQUloRCxFQUFFMUQsRUFBRSw0QkFBNEJNLEVBQUVxRyxXQUFXLGNBQWNqRCxFQUFFdEMsU0FBU2QsRUFBRWdFLGtCQUFrQjlCLEVBQUVoQixFQUFFK0MsYUFBWSxHQUFJeEMsRUFBRVAsRUFBRWdELFlBQVcsR0FBSW5FLElBQUlxRCxFQUFFa0QsS0FBSyxNQUFNdEcsRUFBRW1GLFNBQVNKLEVBQUUvRSxFQUFFdUcsY0FBYyxNQUFNLElBQUssUUFBUXhHLElBQUlMLEVBQUUsV0FBVzhHLEtBQUssV0FBV3pCLEVBQUUvRSxFQUFFdUcsY0FBY3hDLEVBQUVyRSxFQUFFOEMsU0FBUzhELEtBQUssTUFBTXRHLEVBQUVtRixTQUFTRixPQUFPbkUsU0FBU2QsRUFBRWdFLGtCQUFrQixNQUFNLFFBQVFqRSxJQUFJTCxFQUFFLHNDQUFzQzhHLEtBQUt4RyxFQUFFbUYsUUFBUW5GLEVBQUV5RyxTQUFTLFNBQVNyRCxFQUFFbEMsRUFBRWhCLEdBQUc2RSxFQUFFL0UsRUFBRXVHLGFBQWFyRixHQUFHNkMsRUFBRXJFLEVBQUU4QyxTQUFTeUMsT0FBT25FLFNBQVNkLEVBQUVnRSxtQkFBdXNIMEMsR0FBSTNHLFFBQVFMLEVBQUVDLEdBQUdDLE9BQU8rRixVQUFVRixLQUFLLEdBQUdsRCxXQUFVLEVBQUd6QixTQUFTLE9BQU9rRSxXQUFVLEVBQUdoQyxXQUFXLFVBQVVvRCxRQUFRLE9BQU9wQyxrQkFBaUIsRUFBR0ssT0FBTyxRQUFRUSxVQUFTLEVBQUdsRCxTQUFRLEdBQUcsR0FBSW1DLGFBQWEsUUFBUUgsWUFBWSxJQUFJMEMsV0FBVyxpQ0FBaUNFLGNBQWEsRUFBR0UsVUFBUyxFQUFHdEIsU0FBUSxFQUFHbEYsT0FBTSxFQUFHeUUsWUFBVyxFQUFHckUsV0FBVyxPQUFPNkUsU0FBUSxFQUFHaUIsUUFBTyxFQUFHeEYsUUFBUSxHQUFHTCxVQUFVLE9BQU8sUUFBUXdCLGNBQWMsV0FBV2MsV0FBVSxFQUFHNUIsTUFBTSxJQUFJSSxXQUFXLFNBQVNtRCxpQkFBZ0IsRUFBRzNELE9BQU8sTUFBNXdKLENBQW94SitGIiwiZmlsZSI6ImJwb3B1cC5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbihjKXtjLmZuLmJQb3B1cD1mdW5jdGlvbihBLEUpe2Z1bmN0aW9uIEwoKXthLmNvbnRlbnRDb250YWluZXI9YyhhLmNvbnRlbnRDb250YWluZXJ8fGIpO3N3aXRjaChhLmNvbnRlbnQpe2Nhc2UgXCJpZnJhbWVcIjp2YXIgZD1jKCc8aWZyYW1lIGNsYXNzPVwiYi1pZnJhbWVcIiAnK2EuaWZyYW1lQXR0citcIj48L2lmcmFtZT5cIik7ZC5hcHBlbmRUbyhhLmNvbnRlbnRDb250YWluZXIpO3Q9Yi5vdXRlckhlaWdodCghMCk7dT1iLm91dGVyV2lkdGgoITApO0IoKTtkLmF0dHIoXCJzcmNcIixhLmxvYWRVcmwpO2woYS5sb2FkQ2FsbGJhY2spO2JyZWFrO2Nhc2UgXCJpbWFnZVwiOkIoKTtjKFwiPGltZyAvPlwiKS5sb2FkKGZ1bmN0aW9uKCl7bChhLmxvYWRDYWxsYmFjayk7RihjKHRoaXMpKX0pLmF0dHIoXCJzcmNcIixhLmxvYWRVcmwpLmhpZGUoKS5hcHBlbmRUbyhhLmNvbnRlbnRDb250YWluZXIpO2JyZWFrO2RlZmF1bHQ6QigpLGMoJzxkaXYgY2xhc3M9XCJiLWFqYXgtd3JhcHBlclwiPjwvZGl2PicpLmxvYWQoYS5sb2FkVXJsLGEubG9hZERhdGEsZnVuY3Rpb24oZCxiLGUpe2woYS5sb2FkQ2FsbGJhY2ssYik7RihjKHRoaXMpKX0pLmhpZGUoKS5hcHBlbmRUbyhhLmNvbnRlbnRDb250YWluZXIpfX1mdW5jdGlvbiBCKCl7YS5tb2RhbCYmYygnPGRpdiBjbGFzcz1cImItbW9kYWwgJytlKydcIj48L2Rpdj4nKS5jc3Moe2JhY2tncm91bmRDb2xvcjphLm1vZGFsQ29sb3IscG9zaXRpb246XCJmaXhlZFwiLHRvcDowLHJpZ2h0OjAsYm90dG9tOjAsbGVmdDowLG9wYWNpdHk6MCx6SW5kZXg6YS56SW5kZXgrdn0pLmFwcGVuZFRvKGEuYXBwZW5kVG8pLmZhZGVUbyhhLnNwZWVkLGEub3BhY2l0eSk7QygpO2IuZGF0YShcImJQb3B1cFwiLGEpLmRhdGEoXCJpZFwiLGUpLmNzcyh7bGVmdDpcInNsaWRlSW5cIj09YS50cmFuc2l0aW9ufHxcInNsaWRlQmFja1wiPT1hLnRyYW5zaXRpb24/XCJzbGlkZUJhY2tcIj09YS50cmFuc2l0aW9uP2Yuc2Nyb2xsTGVmdCgpK3c6LTEqKHgrdSk6bSghKCFhLmZvbGxvd1swXSYmbnx8ZykpLHBvc2l0aW9uOmEucG9zaXRpb25TdHlsZXx8XCJhYnNvbHV0ZVwiLHRvcDpcInNsaWRlRG93blwiPT1hLnRyYW5zaXRpb258fFwic2xpZGVVcFwiPT1hLnRyYW5zaXRpb24/XCJzbGlkZVVwXCI9PWEudHJhbnNpdGlvbj9mLnNjcm9sbFRvcCgpK3k6eistMSp0OnAoISghYS5mb2xsb3dbMV0mJnF8fGcpKSxcInotaW5kZXhcIjphLnpJbmRleCt2KzF9KS5lYWNoKGZ1bmN0aW9uKCl7YS5hcHBlbmRpbmcmJmModGhpcykuYXBwZW5kVG8oYS5hcHBlbmRUbyl9KTtHKCEwKX1mdW5jdGlvbiByKCl7YS5tb2RhbCYmYyhcIi5iLW1vZGFsLlwiK2IuZGF0YShcImlkXCIpKS5mYWRlVG8oYS5zcGVlZCwwLGZ1bmN0aW9uKCl7Yyh0aGlzKS5yZW1vdmUoKX0pO2Euc2Nyb2xsQmFyfHxjKFwiaHRtbFwiKS5jc3MoXCJvdmVyZmxvd1wiLFwiYXV0b1wiKTtjKFwiLmItbW9kYWwuXCIrZSkudW5iaW5kKFwiY2xpY2tcIik7Zi51bmJpbmQoXCJrZXlkb3duLlwiK2UpO2sudW5iaW5kKFwiLlwiK2UpLmRhdGEoXCJiUG9wdXBcIiwwPGsuZGF0YShcImJQb3B1cFwiKS0xP2suZGF0YShcImJQb3B1cFwiKS0xOm51bGwpO2IudW5kZWxlZ2F0ZShcIi5iQ2xvc2UsIC5cIithLmNsb3NlQ2xhc3MsXCJjbGljay5cIitlLHIpLmRhdGEoXCJiUG9wdXBcIixudWxsKTtjbGVhclRpbWVvdXQoSCk7RygpO3JldHVybiExfWZ1bmN0aW9uIEkoZCl7eT1rLmhlaWdodCgpO3c9ay53aWR0aCgpO2g9RCgpO2lmKGgueHx8aC55KWNsZWFyVGltZW91dChKKSxKPXNldFRpbWVvdXQoZnVuY3Rpb24oKXtDKCk7ZD1kfHxhLmZvbGxvd1NwZWVkO3ZhciBlPXt9O2gueCYmKGUubGVmdD1hLmZvbGxvd1swXT9tKCEwKTpcImF1dG9cIik7aC55JiYoZS50b3A9YS5mb2xsb3dbMV0/cCghMCk6XCJhdXRvXCIpO2IuZGVxdWV1ZSgpLmVhY2goZnVuY3Rpb24oKXtnP2ModGhpcykuY3NzKHtsZWZ0OngsdG9wOnp9KTpjKHRoaXMpLmFuaW1hdGUoZSxkLGEuZm9sbG93RWFzaW5nKX0pfSw1MCl9ZnVuY3Rpb24gRihkKXt2YXIgYz1kLndpZHRoKCksZT1kLmhlaWdodCgpLGY9e307YS5jb250ZW50Q29udGFpbmVyLmNzcyh7aGVpZ2h0OmUsd2lkdGg6Y30pO2U+PWIuaGVpZ2h0KCkmJihmLmhlaWdodD1iLmhlaWdodCgpKTtjPj1iLndpZHRoKCkmJihmLndpZHRoPWIud2lkdGgoKSk7dD1iLm91dGVySGVpZ2h0KCEwKTt1PWIub3V0ZXJXaWR0aCghMCk7QygpO2EuY29udGVudENvbnRhaW5lci5jc3Moe2hlaWdodDpcImF1dG9cIix3aWR0aDpcImF1dG9cIn0pO2YubGVmdD1tKCEoIWEuZm9sbG93WzBdJiZufHxnKSk7Zi50b3A9cCghKCFhLmZvbGxvd1sxXSYmcXx8ZykpO2IuYW5pbWF0ZShmLDI1MCxmdW5jdGlvbigpe2Quc2hvdygpO2g9RCgpfSl9ZnVuY3Rpb24gTSgpe2suZGF0YShcImJQb3B1cFwiLHYpO2IuZGVsZWdhdGUoXCIuYkNsb3NlLCAuXCIrYS5jbG9zZUNsYXNzLFwiY2xpY2suXCIrZSxyKTthLm1vZGFsQ2xvc2UmJmMoXCIuYi1tb2RhbC5cIitlKS5jc3MoXCJjdXJzb3JcIixcInBvaW50ZXJcIikuYmluZChcImNsaWNrXCIscik7Tnx8IWEuZm9sbG93WzBdJiYhYS5mb2xsb3dbMV18fGsuYmluZChcInNjcm9sbC5cIitlLGZ1bmN0aW9uKCl7aWYoaC54fHxoLnkpe3ZhciBkPXt9O2gueCYmKGQubGVmdD1hLmZvbGxvd1swXT9tKCFnKTpcImF1dG9cIik7aC55JiYoZC50b3A9YS5mb2xsb3dbMV0/cCghZyk6XCJhdXRvXCIpO2IuZGVxdWV1ZSgpLmFuaW1hdGUoZCxhLmZvbGxvd1NwZWVkLGEuZm9sbG93RWFzaW5nKX19KS5iaW5kKFwicmVzaXplLlwiK2UsZnVuY3Rpb24oKXtJKCl9KTthLmVzY0Nsb3NlJiZmLmJpbmQoXCJrZXlkb3duLlwiK2UsZnVuY3Rpb24oYSl7Mjc9PWEud2hpY2gmJnIoKX0pfWZ1bmN0aW9uIEcoZCl7ZnVuY3Rpb24gYyhlKXtiLmNzcyh7ZGlzcGxheTpcImJsb2NrXCIsb3BhY2l0eToxfSkuYW5pbWF0ZShlLGEuc3BlZWQsYS5lYXNpbmcsZnVuY3Rpb24oKXtLKGQpfSl9c3dpdGNoKGQ/YS50cmFuc2l0aW9uOmEudHJhbnNpdGlvbkNsb3NlfHxhLnRyYW5zaXRpb24pe2Nhc2UgXCJzbGlkZUluXCI6Yyh7bGVmdDpkP20oISghYS5mb2xsb3dbMF0mJm58fGcpKTpmLnNjcm9sbExlZnQoKS0odXx8Yi5vdXRlcldpZHRoKCEwKSktMjAwfSk7YnJlYWs7Y2FzZSBcInNsaWRlQmFja1wiOmMoe2xlZnQ6ZD9tKCEoIWEuZm9sbG93WzBdJiZufHxnKSk6Zi5zY3JvbGxMZWZ0KCkrdysyMDB9KTticmVhaztjYXNlIFwic2xpZGVEb3duXCI6Yyh7dG9wOmQ/cCghKCFhLmZvbGxvd1sxXSYmcXx8ZykpOmYuc2Nyb2xsVG9wKCktKHR8fGIub3V0ZXJIZWlnaHQoITApKS0yMDB9KTticmVhaztjYXNlIFwic2xpZGVVcFwiOmMoe3RvcDpkP3AoISghYS5mb2xsb3dbMV0mJnF8fGcpKTpmLnNjcm9sbFRvcCgpK3krMjAwfSk7YnJlYWs7ZGVmYXVsdDpiLnN0b3AoKS5mYWRlVG8oYS5zcGVlZCxkPzE6MCxmdW5jdGlvbigpe0soZCl9KX19ZnVuY3Rpb24gSyhkKXtkPyhNKCksbChFKSxhLmF1dG9DbG9zZSYmKEg9c2V0VGltZW91dChyLGEuYXV0b0Nsb3NlKSkpOihiLmhpZGUoKSxsKGEub25DbG9zZSksYS5sb2FkVXJsJiYoYS5jb250ZW50Q29udGFpbmVyLmVtcHR5KCksYi5jc3Moe2hlaWdodDpcImF1dG9cIix3aWR0aDpcImF1dG9cIn0pKSl9ZnVuY3Rpb24gbShhKXtyZXR1cm4gYT94K2Yuc2Nyb2xsTGVmdCgpOnh9ZnVuY3Rpb24gcChhKXtyZXR1cm4gYT96K2Yuc2Nyb2xsVG9wKCk6en1mdW5jdGlvbiBsKGEsZSl7Yy5pc0Z1bmN0aW9uKGEpJiZhLmNhbGwoYixlKX1mdW5jdGlvbiBDKCl7ej1xP2EucG9zaXRpb25bMV06TWF0aC5tYXgoMCwoeS1iLm91dGVySGVpZ2h0KCEwKSkvMi1hLmFtc2wpO3g9bj9hLnBvc2l0aW9uWzBdOih3LWIub3V0ZXJXaWR0aCghMCkpLzI7aD1EKCl9ZnVuY3Rpb24gRCgpe3JldHVybnt4Onc+Yi5vdXRlcldpZHRoKCEwKSx5Onk+Yi5vdXRlckhlaWdodCghMCl9fWMuaXNGdW5jdGlvbihBKSYmKEU9QSxBPW51bGwpO3ZhciBhPWMuZXh0ZW5kKHt9LGMuZm4uYlBvcHVwLmRlZmF1bHRzLEEpO2Euc2Nyb2xsQmFyfHxjKFwiaHRtbFwiKS5jc3MoXCJvdmVyZmxvd1wiLFwiaGlkZGVuXCIpO3ZhciBiPXRoaXMsZj1jKGRvY3VtZW50KSxrPWMod2luZG93KSx5PWsuaGVpZ2h0KCksdz1rLndpZHRoKCksTj0vT1MgNihfXFxkKSsvaS50ZXN0KG5hdmlnYXRvci51c2VyQWdlbnQpLHY9MCxlLGgscSxuLGcseix4LHQsdSxKLEg7Yi5jbG9zZT1mdW5jdGlvbigpe3IoKX07Yi5yZXBvc2l0aW9uPWZ1bmN0aW9uKGEpe0koYSl9O3JldHVybiBiLmVhY2goZnVuY3Rpb24oKXtjKHRoaXMpLmRhdGEoXCJiUG9wdXBcIil8fChsKGEub25PcGVuKSx2PShrLmRhdGEoXCJiUG9wdXBcIil8fDApKzEsZT1cIl9fYi1wb3B1cFwiK3YrXCJfX1wiLHE9XCJhdXRvXCIhPT1hLnBvc2l0aW9uWzFdLG49XCJhdXRvXCIhPT1hLnBvc2l0aW9uWzBdLGc9XCJmaXhlZFwiPT09YS5wb3NpdGlvblN0eWxlLHQ9Yi5vdXRlckhlaWdodCghMCksdT1iLm91dGVyV2lkdGgoITApLGEubG9hZFVybD9MKCk6QigpKX0pfTtjLmZuLmJQb3B1cC5kZWZhdWx0cz17YW1zbDo1MCxhcHBlbmRpbmc6ITAsYXBwZW5kVG86XCJib2R5XCIsYXV0b0Nsb3NlOiExLGNsb3NlQ2xhc3M6XCJiLWNsb3NlXCIsY29udGVudDpcImFqYXhcIixjb250ZW50Q29udGFpbmVyOiExLGVhc2luZzpcInN3aW5nXCIsZXNjQ2xvc2U6ITAsZm9sbG93OlshMCwhMF0sZm9sbG93RWFzaW5nOlwic3dpbmdcIixmb2xsb3dTcGVlZDo1MDAsaWZyYW1lQXR0cjonc2Nyb2xsaW5nPVwibm9cIiBmcmFtZWJvcmRlcj1cIjBcIicsbG9hZENhbGxiYWNrOiExLGxvYWREYXRhOiExLGxvYWRVcmw6ITEsbW9kYWw6ITAsbW9kYWxDbG9zZTohMCxtb2RhbENvbG9yOlwiIzAwMFwiLG9uQ2xvc2U6ITEsb25PcGVuOiExLG9wYWNpdHk6LjcscG9zaXRpb246W1wiYXV0b1wiLFwiYXV0b1wiXSxwb3NpdGlvblN0eWxlOlwiYWJzb2x1dGVcIixzY3JvbGxCYXI6ITAsc3BlZWQ6MjUwLHRyYW5zaXRpb246XCJmYWRlSW5cIix0cmFuc2l0aW9uQ2xvc2U6ITEsekluZGV4Ojk5OTd9fSkoalF1ZXJ5KTsiXX0=