$(document).ready(function() {
            let slider = function(id) {
                self = this;
                this.div = $(id);
                this.largeurCache = this.div.width();
                this.largeur = 0;
                this.div.find('p').each(function() {
                    self.largeur += $(this).width();
                    self.largeur += $parseInt($(this).css("padding-left"));
                    self.largeur += $parseInt($(this).css("padding-right"));
                    self.largeur += $parseInt($(this).css("margin-left"));
                    self.largeur += $parseInt($(this).css("margin-left"));
                });
                this.prec = $(this.div.find(".prec"),
                    this.prec = $(this.div.find(".suivre"), )
                }
            })